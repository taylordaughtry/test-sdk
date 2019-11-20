<?php

namespace HappyCog\OsborneApi\Resources\Base;

use Illuminate\Support\Str;
use HappyCog\OsborneApi\Resources\Base\Model;
use HappyCog\OsborneApi\Resources\Base\ApiClientFactory;
use HappyCog\OsborneApi\Resources\Exceptions\BadResourceMethodException;
use HappyCog\OsborneApi\Resources\Exceptions\InvalidModelOperationException;

class Builder
{
    /**
     * The API client used to fetch models
     *
     * @var HappyCog\OsborneApi\Resources\Base\ApiClient
     */
    protected $client;

    /**
     * The model instance that we are building against
     *
     * @var HappyCog\OsborneApi\Resources\Base\Model
     */
    protected $model;

    /**
     * Create a new model builder
     *
     * @param HappyCog\OsborneApi\Resources\Base\Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->client = ApiClientFactory::create($this->model->baseClassName());
    }

    /**
     * Get a list of resources
     *
     * @return array
     */
    public function all()
    {
        return $this->request('index');
    }

    /**
     * Find a resource by Id
     *
     * @param int $id
     *
     * @return mixed
     */
    public function find(int $id)
    {
        return $this->request('show', $id);
    }

    /**
     * Create a resource
     *
     * @param array|null $attributes
     *
     * @return mixed
     */
    public function create(array $attributes = null)
    {
        if (! empty($attributes)) {
            $this->model->fill($attributes);
        }

        return $this->model->hydrate(
            $this->request('store', $this->model)
        );
    }

    /**
     * Update a resource
     *
     * @param int $id
     * @param array $attributes
     *
     * @return mixed
     */
    public function update()
    {
        return $this->model->hydrate(
            $this->request('update', $this->model->id, $this->model)
        );
    }

    /**
     * Delete a resource
     *
     * @param int $id
     *
     * @return array
     */
    public function delete(int $id)
    {
        $this->model->exists = false;

        return (array) $this->request('destroy', $id);
    }

    /**
     * Craft a Request to the api
     *
     * @param string $action
     * @param array ...$input
     *
     * @return mixed
     */
    protected function request(string $action, ...$input)
    {
        $method = $this->getMethodName($action);

        if (! method_exists($this->client, $method)) {
            $called = debug_backtrace(null, 2)[1]['function'];
            throw new BadResourceMethodException('Error: Call to undefined "' . $called . '" method on ' . get_class($this->model));
        }

        return $this->markModelExists(
            call_user_func_array([$this->client, $method], $input)
        );
    }

    /**
     * Recursively mark any models as existing if they were returned by the API
     *
     * @param mixed $response
     *
     * @return mixed
     */
    protected function markModelExists($response)
    {
        if (is_array($response)) {
            foreach ($response as $index => $value) {
                $response[$index] = $this->markModelExists($value);
            }
        } elseif ($response instanceof Model) {
            $response->exists = true;
        }

        return $response;
    }

    /**
     * Gets the method name for the provided action
     *
     * @param string $action
     *
     * @return string
     */
    protected function getMethodName(string $action)
    {
        $singular = $this->model->baseClassName();
        $plural = Str::plural($singular);

        return Str::camel([
            'index' => "{$plural}Get",
            'show' => "{$plural}{$singular}IdGet",
            'store' => "{$plural}Post",
            'update' => "{$plural}{$singular}IdPut",
            'destroy' => "{$plural}{$singular}IdDeleteDelete",
        ][$action]);
    }
}
