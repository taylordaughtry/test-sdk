<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\ShippingCarrier;

class ShippingCarrierModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllShippingCarriers()
    {
        $shippingCarriers = ShippingCarrier::all();

        $this->assertInstanceOf(Collection::class, $shippingCarriers);

        foreach ($shippingCarriers as $shippingCarrier) {
            $this->assertInstanceOf(ShippingCarrier::class, $shippingCarrier);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificShippingCarrier()
    {
        $shippingCarrier = ShippingCarrier::find(1);

        $this->assertInstanceOf(ShippingCarrier::class, $shippingCarrier);
    }
}
