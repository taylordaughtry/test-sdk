<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\ShippingMethod;

class ShippingMethodModelTest extends TestCase
{
    use IntegrationServiceApi;

    /** @test */
    public function serviceApiFindsAllShippingMethods()
    {
        $shippingMethods = ShippingMethod::all();

        $this->assertInstanceOf(Collection::class, $shippingMethods);

        foreach ($shippingMethods as $shippingMethod) {
            $this->assertInstanceOf(ShippingMethod::class, $shippingMethod);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificShippingMethod()
    {
        $shippingMethod = ShippingMethod::find(1);

        $this->assertInstanceOf(ShippingMethod::class, $shippingMethod);
    }
}
