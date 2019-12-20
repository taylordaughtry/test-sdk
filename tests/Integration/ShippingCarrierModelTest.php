<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\ShippingCarrier;

class ShippingCarrierModelTest extends TestCase
{
    use IntegrationServiceApi;

    /**
     * @test
     */
    public function serviceApiFindsAllShippingCarriers()
    {
        $shippingCarriers = ShippingCarrier::all();

        $this->assertInstanceOf(Collection::class, $shippingCarriers);

        foreach ($shippingCarriers as $shippingCarrier) {
            $this->assertInstanceOf(ShippingCarrier::class, $shippingCarrier);
        }

        return $shippingCarriers->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllShippingCarriers
     */
    public function serviceApiFindsASpecificShippingCarrier($shippingCarrierId)
    {
        $shippingCarrier = ShippingCarrier::find($shippingCarrierId);

        $this->assertInstanceOf(ShippingCarrier::class, $shippingCarrier);
    }
}
