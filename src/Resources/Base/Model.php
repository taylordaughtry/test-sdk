<?php

namespace HappyCog\OsborneApi\Resources\Base;

use ReflectionClass;
use HappyCog\OsborneApi\Resources\Base\Builder;

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
     * Get the short class name
     *
     * @return string
     */
    public function baseClassName()
    {
        return (new ReflectionClass($this))->getShortName();
    }

    /**
     * Get attributes dynamically
     *
     * @param string $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->container[$name] ?? null;
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
        return $this->callBuilder($name, ...$arguments);
    }

    /**
     * Forward the call to a model builder
     *
     * @param string $name
     * @param array ...$arguments
     *
     * @return mixed
     */
    protected function callBuilder(string $name, ...$arguments)
    {
        if (is_null($this->builder)) {
            $this->builder = new Builder($this);
        }

        return call_user_func_array([$this->builder, $name], $arguments);
    }

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

    /**
     * Save the current model
     *
     * @return bool
     */
    public function save()
    {
        if ($this->exists) {
            return $this->callBuilder('update');
        }

        return $this->callBuilder('create');
    }

    /**
     * Destroy a resource by id
     *
     * @param int $id
     *
     * @return mixed
     */
    public static function destroy(int $id)
    {
        return (new static)->callBuilder('delete', $id);
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

        return $this->callBuilder('delete', $this->id);
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
}
