<?php

namespace HappyCog\OsborneApi\Resources\Base\ApiClient;

use Illuminate\Support\Str;
use GuzzleHttp\ClientInterface;
use HappyCog\OsborneApi\Resources\Base\Model;
use HappyCog\OsborneApi\ErpService\Configuration;

class Factory
{
    /**
     * The namespace where ApiClient instances can be found
     *
     * @var string
     */
    protected static $apiNamespace = 'HappyCog\\OsborneApi\\ErpService\\Api\\';

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
        $class = static::$apiNamespace . Str::plural($name) . 'Api';

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
