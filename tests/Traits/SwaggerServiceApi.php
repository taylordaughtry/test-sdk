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
        $config->setHost('https://virtserver.swaggerhub.com/jordan-hoff/osborne_erp_service_api/1.0.5');

        Factory::setConfig($config);
    }
}
