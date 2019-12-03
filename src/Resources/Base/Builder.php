<?php

namespace HappyCog\OsborneApi\Resources\Base;

use ReflectionClass;
use Illuminate\Support\Str;
use HappyCog\OsborneApi\Resources\Base\Model;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\Resources\Base\ApiClient\Factory;
use HappyCog\OsborneApi\Resources\Exceptions\BadResourceMethodException;
use HappyCog\OsborneApi\Resources\Exceptions\InvalidModelOperationException;

class Builder
{
    /**
     * The base model for all operations
     *
     * @var HappyCog\OsborneApi\Resources\Base\Model
     */
    protected $model;

    /**
     * The api client to create requests against
     *
     * @var \HappyCog\OsborneApi\Resources\Base\ApiClient
     */
    protected $client;

    /**
     * Create a new model builder
     *
     * @param HappyCog\OsborneApi\Resources\Base\Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->client = Factory::create((new ReflectionClass($model))->getShortName());
    }

    /**
     * Determine if the request exists for the provided path
     *
     * @param string $path
     * @param string $action
     *
     * @return boolean
     */
    public function canRequest(string $path, string $action)
    {
        return $this->client->hasOperation($path, $action);
    }

    /**
     * Gets the request type for the provided operation path
     *
     * @param string $path
     * @param string $action
     *
     * @return string
     */
    public function getRequestType(string $path, string $action)
    {
        return $this->client->getRequestType($path, $action);
    }

    /**
     * Craft a Request to the api
     *
     * @param string $path
     * @param string $action
     * @param array ...$input
     *
     * @return mixed
     */
    public function request(string $path, string $action, ...$input)
    {
        if (! $this->canRequest($path, $action)) {
            $called = debug_backtrace(null, 2)[1]['function'];
            throw new BadResourceMethodException('Error: Call to undefined "' . $called . '" on ' . get_class($this->model) . ' (' . $path . ':' . $action . ')');
        }

        if (class_exists($requestType = $this->getRequestType($path, $action))) {
            if (! end($input) instanceof $requestType) {
                $input[] = new $requestType(array_pop($input));
            }
        }

        $response = $this->client->getOperation($path, $action, ...$input);

        if ($action === 'index') {
            $response = Collection::wrap($response)->setPath($path);
        }

        return $this->prepare($response, $path);
    }

    /**
     * Recursively mark any models as existing if they were returned by the API
     *
     * @param mixed $response
     * @param string $path
     *
     * @return mixed
     */
    protected function prepare($response, string $path)
    {
        if ($response instanceof Collection) {
            foreach ($response as $index => $value) {
                $response[$index] = $this->prepare($value, $path);
            }
        } elseif ($response instanceof Model) {
            $response->exists = true;
            $response->setPath($path);
        }

        return $response;
    }
}
