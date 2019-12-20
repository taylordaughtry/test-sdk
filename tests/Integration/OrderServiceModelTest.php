<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\ErpService\Model\OrderService;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\Disclaimer;

class OrderServiceModelTest extends TestCase
{
    use IntegrationServiceApi;

    /** @test */
    public function serviceApiFindsAllOrderServices()
    {
        $orderServices = OrderService::all();

        $this->assertInstanceOf(Collection::class, $orderServices);

        foreach ($orderServices as $orderService) {
            $this->assertInstanceOf(OrderService::class, $orderService);
        }

        return $orderServices->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllOrderServices
     */
    public function serviceApiFindsASpecificOrderService($orderServiceId)
    {
        $orderService = OrderService::find($orderServiceId);

        $this->assertInstanceOf(OrderService::class, $orderService);
    }

    /**
     * @test
     * @depends serviceApiFindsAllOrderServices
     */
    public function serviceApiFindsOrderServiceDisclaimers($orderServiceId)
    {
        $disclaimers = OrderService::find($orderServiceId)->disclaimers;

        $this->assertInstanceOf(Collection::class, $disclaimers);

        foreach ($disclaimers as $disclaimer) {
            $this->assertInstanceOf(Disclaimer::class, $disclaimer);
        }
    }
}
