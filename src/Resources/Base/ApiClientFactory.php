<?php

namespace HappyCog\OsborneApi\Resources\Base;

use Illuminate\Support\Str;
use GuzzleHttp\ClientInterface;
use HappyCog\OsborneApi\ErpService\Configuration;

class ApiClientFactory
{
    /**
     * The configuration to use when connecting to the ERP Service
     *
     * @var HappyCog\OsborneApi\ErpService\Configuration
     */
    protected static $config;

    /**
     * The guzzle client to use when connecting to the ERP Service
     *
     * @var GuzzleHttp\ClientInterface
     */
    protected static $httpClient;

    /**
     * Create a new api client
     *
     * @param string $name
     *
     * @return HappyCog\OsborneApi\Resources\Base\ApiClient
     */
    public static function create(string $name)
    {
        $class = 'HappyCog\\OsborneApi\\ErpService\\Api\\' . Str::plural($name) . 'Api';

        return new $class(static::$httpClient, static::$config);
    }

    /**
     * Set the configuration to use when connecting to the ERP Service
     *
     * @param HappyCog\OsborneApi\ErpService\Configuration $config
     */
    public static function setConfig(Configuration $config)
    {
        static::$config = $config;
    }

    /**
     * Set the guzzle client to use when connecting to the ERP Service
     *
     * @param GuzzleHttp\ClientInterface $httpClient
     */
    public static function setHttpClient(ClientInterface $httpClient)
    {
        static::$httpClient = $httpClient;
    }
}
