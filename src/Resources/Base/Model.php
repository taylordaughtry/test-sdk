<?php

namespace HappyCog\OsborneApi\Resources\Base;

use Exception;
use Illuminate\Support\Str;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
abstract class Model
{
    /**
     * The model builder
     *
     * @var \HappyCog\OsborneApi\Resources\Base\Builder
     */
    protected $builder;

    /**
     * If the model exists as a resource in the database
     *
     * @var bool
     */
    public $exists = false;

    /**
     * Parent model
     *
     * @var \HappyCog\OsborneApi\Resources\Base\Model|null
     */
    protected $parent;

    /**
     * Operation Path
     *
     * @var string
     */
    protected $path = '';

    /**
     * Proxy a static call to a new instance
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return (new static)->$name(...$arguments);
    }

    /**
     * Statically get an index for a model base
     *
     * @param array ...$arguments
     *
     * @return \HappyCog\OsborneApi\Resources\Base\Collection
     */
    public static function all(...$arguments)
    {
        return (new static)->index(...$arguments);
    }

    /**
     * Destroy a resource by id
     *
     * @param int $modelId
     *
     * @return mixed
     */
    public static function destroy(int $modelId)
    {
        return (new static)->builder()->request('', 'destroy', $modelId);
    }

    /**
     * Statically find a specific model
     *
     * @param array ...$arguments
     *
     * @return static
     */
    public static function find(...$arguments)
    {
        return (new static)->show(...$arguments);
    }

    /**
     * Proxy a call to the model builder
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if ($this->builder()->hasResource($resource = $this->path . '.' . Str::snake($name))) {
            if ($this->builder()->canRequest($resource, 'show')) {
                return $this->adopt(
                    $this->builder()->request($resource, 'show', ...$this->ids(...$arguments))
                );
            }

            throw new Exception(sprintf(
                'API does not support "%s(%s)" on %s',
                $name,
                implode(', ', $arguments),
                get_class($this)
            ));
        }

        return $this->builder()->request($this->path, $name, ...$arguments);
    }

    /**
     * Get attributes and relationships dynamically
     *
     * @param string $name
     *
     * @return mixed
     */
    public function __get(string $name)
    {
        if ($this->builder()->hasResource($resource = $this->path . '.' . Str::snake($name))) {
            if ($this->builder()->canRequest($resource, 'index')) {
                return $this->adopt(
                    $this->builder()->request($resource, 'index', ...$this->ids())
                );
            }

            throw new Exception(sprintf(
                'API does not support listing "%s" on %s',
                $name,
                get_class($this)
            ));
        }

        return $this->container[$name] ?? null;
    }

    /**
     * Sets the current model as the parent on the relationship response
     *
     * @param mixed $response
     *
     * @return mixed
     */
    public function adopt($response)
    {
        if ($response instanceof Collection) {
            $response->setParent($this);

            $response->each->setParent($this);

            return $response;
        }

        return $response->setParent($this);
    }

    /**
     * Get the top level builder
     *
     * @return mixed
     */
    public function builder()
    {
        if ($this->parent) {
            return $this->parent->builder();
        }

        if (is_null($this->builder)) {
            $this->builder = new Builder($this);
        }

        return $this->builder;
    }

    /**
     * Delete the current model, if it exists
     *
     * @return mixed
     */
    public function delete()
    {
        if (! $this->exists) {
            return false;
        }

        $this->exists = false;

        $params = array_filter(array_merge($this->ids(), [$this->id]));

        return $this->builder()->request($this->path, 'destroy', ...$params);
    }

    /**
     * Fill the container with the provided attributes
     *
     * @param array $attributes
     *
     * @return $this
     */
    public function fill(array $attributes)
    {
        $this->container = array_merge($this->container, $attributes);

        return $this;
    }

    /**
     * Hydrate the current model based on a response from the API
     *
     * @param self $input
     *
     * @return static
     */
    public function hydrate(self $input)
    {
        $this->container = $input->container;
        $this->exists = true;

        return $this;
    }

    /**
     * Get all of the params up the model tree
     *
     * @param array $requested
     *
     * @return array
     */
    public function ids(...$requested)
    {
        return array_merge($this->parent ?
            array_merge($this->parent->ids(), [$this->id]) :
            [$this->id], $requested);
    }

    /**
     * Save the current model
     *
     * @return bool
     */
    public function save()
    {
        $params = array_filter(array_merge($this->ids(), [$this]));

        if ($this->exists) {
            return $this->hydrate(
                $this->builder()->request($this->path, 'update', ...$params)
            );
        }

        return $this->hydrate(
            $this->builder()->request($this->path, 'create', ...$params)
        );
    }

    /**
     * Set the parent model on the instance
     *
     * @param self $parent
     *
     * @return $this
     */
    public function setParent(self $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Set the current path for the model
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath(string $path)
    {
        $this->path = trim($path, '.');

        return $this;
    }

    /**
     * Update the model
     *
     * @param array $attributes
     *
     * @return bool
     */
    public function update(array $attributes)
    {
        if (! $this->exists) {
            return false;
        }

        return $this->fill($attributes)->save();
    }
}
