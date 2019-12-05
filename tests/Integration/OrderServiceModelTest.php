<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\ErpService\Model\OrderService;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\Disclaimer;

class OrderServiceModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllOrderServices()
    {
        $orderServices = OrderService::all();

        $this->assertInstanceOf(Collection::class, $orderServices);

        foreach ($orderServices as $orderService) {
            $this->assertInstanceOf(OrderService::class, $orderService);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificOrderService()
    {
        $orderService = OrderService::find(1);

        $this->assertInstanceOf(OrderService::class, $orderService);
    }

    /** @test */
    public function serviceApiFindsOrderServiceDisclaimers()
    {
        $disclaimers = OrderService::find(1)->disclaimers;

        $this->assertInstanceOf(Collection::class, $disclaimers);

        foreach ($disclaimers as $disclaimer) {
            $this->assertInstanceOf(Disclaimer::class, $disclaimer);
        }
    }
}
