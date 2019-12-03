<?php

namespace HappyCog\OsborneApi\Resources\Base;

use Illuminate\Support\Str;
use HappyCog\OsborneApi\Resources\Base\Model;
use HappyCog\OsborneApi\Resources\Base\ApiClient\Operations;

abstract class ApiClient
{
    /**
     * The operations for this client
     *
     * @var array
     */
    protected $operations;

    /**
     * Parse the operation structure
     */
    public function __construct()
    {
        $this->operations = new Operations($this->operationDefinitions);
    }

    /**
     * Get a response from the api for the provided operation path, action and input
     *
     * @param string $path
     * @param string $action
     * @param array ...$input
     *
     * @return mixed|false
     */
    public function getOperation(string $path, string $action, ...$input)
    {
        if ($method = $this->operations->getOperation($path, $action)) {
            return $this->$method(...$input);
        }

        return false;
    }

    /**
     * Get the request type for the provided operation path and action
     *
     * @param string $path
     * @param string $action
     *
     * @return string
     */
    public function getRequestType(string $path, string $action)
    {
        return $this->operations->getRequestType($path, $action);
    }

    /**
     * Check if the api supports the provided operation path and action
     *
     * @param string $path
     * @param string $action
     *
     * @return boolean
     */
    public function hasOperation(string $path, string $action)
    {
        return $this->operations->getOperation($path, $action) !== false;
    }
}
