<?php

namespace HappyCog\OsborneApi\Resources\Base\ApiClient;

use Illuminate\Support\Arr;

class Operations
{
    /**
     * Operation structure
     *
     * @var array
     */
    protected $structure = [];

    /**
     * Instantiate an Operations instance
     */
    public function __construct(array $definitions)
    {
        $this->buildStructure($definitions);
    }

    /**
     * Gets the operation for the provided path and action
     *
     * @param string $path
     * @param string $action
     *
     * @return string|false
     */
    public function getOperation(string $path, string $action)
    {
        return Arr::get($this->structure, trim("$path.$action.operation", '.'), false);
    }

    /**
     * Get the operation request type for the provided path and action
     *
     * @param string $path
     * @param string $action
     *
     * @return string|false
     */
    public function getRequestType(string $path, string $action)
    {
        return Arr::get($this->structure, trim("$path.$action.requestType", '.'), false);
    }

    /**
     * Breakdown the definitions into a structure
     *
     * @param array $definitions
     *
     * @return void
     */
    protected function buildStructure(array $definitions)
    {
        foreach ($definitions as $operation => [
            'path' => $path,
            'method' => $method,
            'collection' => $collection,
            'requestType' => $requestType
        ]) {
            Arr::set(
                $this->structure,
                $this->getKey($path, $method, $collection),
                [
                    'operation' => $operation,
                    'requestType' => $requestType,
                ]
            );
        }

        $this->structure = array_shift($this->structure);
    }

    /**
     * Get the array key from the definition
     *
     * @param string $path
     * @param string $method
     * @param bool $collection
     *
     * @return string
     */
    protected function getKey(string $path, string $method, bool $collection)
    {
        $path = str_replace('-', '_', trim(preg_replace('/\/\{[^\}]*\}\/?/', '.', $path), '/.'));

        if ($method === 'GET' && $collection) {
            return "$path.index";
        }

        return $path . '.' . [
            'GET' => 'show',
            'POST' => 'create',
            'PUT' => 'update',
            'DELETE' => 'destroy',
        ][$method];
    }
}
