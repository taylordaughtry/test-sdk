<?php

namespace HappyCog\OsborneApi\Resources\Base;

use Illuminate\Support\Collection as BaseCollection;

class Collection extends BaseCollection
{
    /**
     * The parent model
     *
     * @var \HappyCog\OsborneApi\Resources\Base\Model
     */
    protected $parent;

    /**
     * The operation path
     *
     * @var string
     */
    protected $path;

    /**
     * Create a new model in the collection
     *
     * @param array $attributes
     *
     * @return mixed
     */
    public function create(array $attributes)
    {
        if (class_exists($requestType = $this->getCreateRequestType())) {
            $attributes = new $requestType($attributes);
        }

        $params = array_merge($this->parent->ids(), [$attributes]);

        return $this->parent->adopt(
            $this->parent->builder()->request($this->path, 'create', ...$params)
        );
    }

    /**
     * Gets the request type for the collection
     *
     * @return string|false
     */
    public function getCreateRequestType()
    {
        return $this->parent->builder()->getRequestType($this->path, 'create');
    }

    /**
     * Set the collection parent
     *
     * @param \HappyCog\OsborneApi\Resources\Base\Model $parent
     *
     * @return $this
     */
    public function setParent(Model $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Set the operation path
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }
}
