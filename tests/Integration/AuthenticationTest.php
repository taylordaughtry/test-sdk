<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\OsborneApi\ErpService\ApiException;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Product;
use HappyCog\OsborneApi\Resources\Base\ApiClient\Factory;

class AuthenticationTest extends TestCase
{
    use IntegrationServiceApi;

    /** @test */
    public function serviceApiReturns401WithoutAccessToken()
    {
        Factory::setConfig(Factory::getConfig()->setAccessToken(null));

        try {
            Product::find(1);
        } catch (ApiException $exception) {
            $this->assertEquals(401, $exception->getCode());
            return;
        }

        // If we don't get an exception, fail
        $this->fail('Failed to catch unauthorizaion exception');
    }
}
