<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Order;
use HappyCog\OsborneApi\ErpService\Model\ShippingEstimate;

class ShippingEstimateModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiCreatesShippingEstimatesWithZipcode()
    {
        $order = Order::find(123);

        $estimate = ShippingEstimate::create([
            'orderLines' => $order->lines,
            'zipcode' => '90210-1234',
        ]);

        $this->assertInstanceOf(ShippingEstimate::class, $estimate);
    }
}
