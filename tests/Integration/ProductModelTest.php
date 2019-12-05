<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Product;
use HappyCog\OsborneApi\ErpService\Model\Customer;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\Promotion;
use HappyCog\OsborneApi\ErpService\Model\Disclaimer;
use HappyCog\OsborneApi\ErpService\Model\ProductImage;
use HappyCog\OsborneApi\ErpService\Model\ProductDrawing;
use HappyCog\OsborneApi\ErpService\Model\ProductService;
use HappyCog\OsborneApi\ErpService\Model\ProductCategory;
use HappyCog\OsborneApi\ErpService\Model\ProductMaterial;
use HappyCog\OsborneApi\ErpService\Model\ProductMaterialImage;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class ProductModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllProducts()
    {
        $products = Product::all();

        $this->assertInstanceOf(Collection::class, $products);

        foreach ($products as $product) {
            $this->assertInstanceOf(Product::class, $product);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificProduct()
    {
        $product = Product::find(1);

        $this->assertInstanceOf(Product::class, $product);
    }

    /** @test */
    public function serviceApiFindsProductCategories()
    {
        $categories = Product::find(1)->categories;

        $this->assertInstanceOf(Collection::class, $categories);

        foreach ($categories as $category) {
            $this->assertInstanceOf(ProductCategory::class, $category);
        }
    }

    /** @test */
    public function serviceApiFindsProductCustomers()
    {
        $customers = Product::find(1)->customers;

        $this->assertInstanceOf(Collection::class, $customers);

        foreach ($customers as $customer) {
            $this->assertInstanceOf(Customer::class, $customer);
        }
    }

    /** @test */
    public function serviceApiFindsProductDisclaimers()
    {
        $disclaimers = Product::find(1)->disclaimers;

        $this->assertInstanceOf(Collection::class, $disclaimers);

        foreach ($disclaimers as $disclaimer) {
            $this->assertInstanceOf(Disclaimer::class, $disclaimer);
        }
    }

    /** @test */
    public function serviceApiFindsProductDrawings()
    {
        $drawings = Product::find(1)->drawings;

        $this->assertInstanceOf(Collection::class, $drawings);

        foreach ($drawings as $drawing) {
            $this->assertInstanceOf(ProductDrawing::class, $drawing);
        }
    }

    /** @test */
    public function serviceApiFindsSpecificProductDrawing()
    {
        $drawing = Product::find(1)->drawings(2);

        $this->assertInstanceOf(ProductDrawing::class, $drawing);
    }

    /** @test */
    public function serviceApiFindsProductImages()
    {
        $images = Product::find(1)->images;

        $this->assertInstanceOf(Collection::class, $images);

        foreach ($images as $image) {
            $this->assertInstanceOf(ProductImage::class, $image);
        }
    }

    /** @test */
    public function serviceApiFindsSpecificProductImage()
    {
        $image = Product::find(1)->images(2);

        $this->assertInstanceOf(ProductImage::class, $image);
    }

    /** @test */
    public function serviceApiFindsProductMaterials()
    {
        $materials = Product::find(1)->materials;

        $this->assertInstanceOf(Collection::class, $materials);

        foreach ($materials as $material) {
            $this->assertInstanceOf(ProductMaterial::class, $material);
        }
    }

    /** @test */
    public function serviceApiFindsSpecificProductMaterial()
    {
        $material = Product::find(1)->materials(2);

        $this->assertInstanceOf(ProductMaterial::class, $material);
    }

    /** @test */
    public function serviceApiFindsProductSubMaterials()
    {
        $subMaterials = Product::find(1)->materials(2)->materials;

        $this->assertInstanceOf(Collection::class, $subMaterials);

        foreach ($subMaterials as $subMaterial) {
            $this->assertInstanceOf(ProductMaterial::class, $subMaterial);
        }
    }

    /** @test */
    public function serviceApiFindsProductMaterialImages()
    {
        $images = Product::find(1)->materials(2)->images;

        $this->assertInstanceOf(Collection::class, $images);

        foreach ($images as $image) {
            $this->assertInstanceOf(ProductMaterialImage::class, $image);
        }
    }

    /** @test */
    public function serviceApiFindsSpecificProductMaterialImage()
    {
        $image = Product::find(1)->materials(2)->images(3);

        $this->assertInstanceOf(ProductMaterialImage::class, $image);
    }

    /** @test */
    public function serviceApiFindsProductPromotions()
    {
        $promotions = Product::find(1)->promotions;

        $this->assertInstanceOf(Collection::class, $promotions);

        foreach ($promotions as $promotion) {
            $this->assertInstanceOf(Promotion::class, $promotion);
        }
    }

    /** @test */
    public function serviceApiFindsProductServices()
    {
        $services = Product::find(1)->services;

        $this->assertInstanceOf(Collection::class, $services);

        foreach ($services as $service) {
            $this->assertInstanceOf(ProductService::class, $service);
        }
    }

    /** @test */
    public function serviceApiFindsSpecificProductService()
    {
        $service = Product::find(1)->services(2);

        $this->assertInstanceOf(ProductService::class, $service);
    }
}
