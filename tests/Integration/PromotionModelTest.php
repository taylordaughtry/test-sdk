<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\Promotion;
use HappyCog\OsborneApi\ErpService\Model\PromotionProduct;
use HappyCog\OsborneApi\ErpService\Model\PromotionCustomer;
use HappyCog\OsborneApi\ErpService\Model\PromotionShippingMethod;

class PromotionModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllPromotions()
    {
        $promotions = Promotion::all();

        $this->assertInstanceOf(Collection::class, $promotions);

        foreach ($promotions as $promotion) {
            $this->assertInstanceOf(Promotion::class, $promotion);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificPromotion()
    {
        $promotion = Promotion::find(1);

        $this->assertInstanceOf(Promotion::class, $promotion);
    }

    /** @test */
    public function serviceApiFindsPromotionCustomers()
    {
        $customers = Promotion::find(1)->customers;

        $this->assertInstanceOf(Collection::class, $customers);

        foreach ($customers as $customer) {
            $this->assertInstanceOf(PromotionCustomer::class, $customer);
        }
    }

    /** @test */
    public function serviceApiFindsPromotionProducts()
    {
        $products = Promotion::find(1)->products;

        $this->assertInstanceOf(Collection::class, $products);

        foreach ($products as $product) {
            $this->assertInstanceOf(PromotionProduct::class, $product);
        }
    }

    /** @test */
    public function serviceApiFindsSpecificPromotionProduct()
    {
        $product = Promotion::find(1)->products(2);

        $this->assertInstanceOf(PromotionProduct::class, $product);
    }

    /** @test */
    public function serviceApiFindsPromotionShippingMethods()
    {
        $shippingMethods = Promotion::find(1)->shippingMethods;

        $this->assertInstanceOf(Collection::class, $shippingMethods);

        foreach ($shippingMethods as $shippingMethod) {
            $this->assertInstanceOf(PromotionShippingMethod::class, $shippingMethod);
        }
    }
}
