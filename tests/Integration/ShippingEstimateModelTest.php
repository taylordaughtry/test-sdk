<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Order;
use HappyCog\OsborneApi\ErpService\Model\ShippingEstimate;

class ShippingEstimateModelTest extends TestCase
{
    use IntegrationServiceApi;

    /**
     * @test
     */
    public function serviceApiCreatesShippingEstimatesWithZipcode()
    {
        $estimate = ShippingEstimate::create([
            'shippingMethodId' => 23,
            'zipcode' => '90210-1234',
        ]);

        $this->assertInstanceOf(ShippingEstimate::class, $estimate);
    }
}
