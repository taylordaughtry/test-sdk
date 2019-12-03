<?php

namespace HappyCog\Tests\Traits;

use HappyCog\OsborneApi\ErpService\Configuration;
use HappyCog\OsborneApi\Resources\Base\ApiClient\Factory;

trait SwaggerServiceApi
{
    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $config = new Configuration();
        $config->setHost(getenv('SWAGGER_SERVICE_API_URL'));

        Factory::setConfig($config);
    }
}
