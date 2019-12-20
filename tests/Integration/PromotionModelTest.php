<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\Promotion;
use HappyCog\OsborneApi\ErpService\Model\PromotionProduct;
use HappyCog\OsborneApi\ErpService\Model\PromotionCustomer;
use HappyCog\OsborneApi\ErpService\Model\PromotionShippingMethod;

class PromotionModelTest extends TestCase
{
    use IntegrationServiceApi;

    /**
     * @test
     */
    public function serviceApiFindsAllPromotions()
    {
        $promotions = Promotion::all();

        $this->assertInstanceOf(Collection::class, $promotions);

        foreach ($promotions as $promotion) {
            $this->assertInstanceOf(Promotion::class, $promotion);
        }

        return $promotions->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllPromotions
     */
    public function serviceApiFindsASpecificPromotion($promotionId)
    {
        $promotion = Promotion::find($promotionId);

        $this->assertInstanceOf(Promotion::class, $promotion);
    }

    /**
     * @test
     * @depends serviceApiFindsAllPromotions
     */
    public function serviceApiFindsPromotionCustomers($promotionId)
    {
        $customers = Promotion::find($promotionId)->customers;

        $this->assertInstanceOf(Collection::class, $customers);

        foreach ($customers as $customer) {
            $this->assertInstanceOf(PromotionCustomer::class, $customer);
        }
    }

    /**
     * @test
     * @depends serviceApiFindsAllPromotions
     */
    public function serviceApiFindsPromotionProducts($promotionId)
    {
        $products = Promotion::find($promotionId)->products;

        $this->assertInstanceOf(Collection::class, $products);

        foreach ($products as $product) {
            $this->assertInstanceOf(PromotionProduct::class, $product);
        }

        return $products->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllPromotions
     * @depends serviceApiFindsPromotionProducts
     */
    public function serviceApiFindsSpecificPromotionProduct($promotionId, $productId)
    {
        $product = Promotion::find($promotionId)->products($productId);

        $this->assertInstanceOf(PromotionProduct::class, $product);
    }

    /**
     * @test
     * @depends serviceApiFindsAllPromotions
     */
    public function serviceApiFindsPromotionShippingMethods($promotionId)
    {
        $shippingMethods = Promotion::find($promotionId)->shippingMethods;

        $this->assertInstanceOf(Collection::class, $shippingMethods);

        foreach ($shippingMethods as $shippingMethod) {
            $this->assertInstanceOf(PromotionShippingMethod::class, $shippingMethod);
        }
    }
}
