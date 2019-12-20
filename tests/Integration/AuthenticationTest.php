<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Product;
use HappyCog\OsborneApi\Resources\Base\ApiClient\Factory;

class AuthenticationTest extends TestCase
{
    use IntegrationServiceApi;

    /** @test */
    public function serviceApiReturns401WithoutAccessToken()
    {
        $config = Factory::getConfig();

        $product = Product::find(1);

        $this->assertInstanceOf(Product::class, $product);
    }
}
