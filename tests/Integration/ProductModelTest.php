<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
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
    use IntegrationServiceApi;

    /**
     * @test
     */
    public function serviceApiFindsAllProducts()
    {
        $products = Product::all();

        $this->assertInstanceOf(Collection::class, $products);

        foreach ($products as $product) {
            $this->assertInstanceOf(Product::class, $product);
        }

        return $products->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     */
    public function serviceApiFindsASpecificProduct($productId)
    {
        $product = Product::find($productId);

        $this->assertInstanceOf(Product::class, $product);
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     */
    public function serviceApiFindsProductCategories($productId)
    {
        $categories = Product::find($productId)->categories;

        $this->assertInstanceOf(Collection::class, $categories);

        foreach ($categories as $category) {
            $this->assertInstanceOf(ProductCategory::class, $category);
        }
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     */
    public function serviceApiFindsProductCustomers($productId)
    {
        $customers = Product::find($productId)->customers;

        $this->assertInstanceOf(Collection::class, $customers);

        foreach ($customers as $customer) {
            $this->assertInstanceOf(Customer::class, $customer);
        }
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     */
    public function serviceApiFindsProductDisclaimers($productId)
    {
        $disclaimers = Product::find($productId)->disclaimers;

        $this->assertInstanceOf(Collection::class, $disclaimers);

        foreach ($disclaimers as $disclaimer) {
            $this->assertInstanceOf(Disclaimer::class, $disclaimer);
        }
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     */
    public function serviceApiFindsProductDrawings($productId)
    {
        $drawings = Product::find($productId)->drawings;

        $this->assertInstanceOf(Collection::class, $drawings);

        foreach ($drawings as $drawing) {
            $this->assertInstanceOf(ProductDrawing::class, $drawing);
        }

        return $drawings->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     * @depends serviceApiFindsProductDrawings
     */
    public function serviceApiFindsSpecificProductDrawing($productId, $drawingId)
    {
        $drawing = Product::find($productId)->drawings($drawingId);

        $this->assertInstanceOf(ProductDrawing::class, $drawing);
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     */
    public function serviceApiFindsProductImages($productId)
    {
        $images = Product::find($productId)->images;

        $this->assertInstanceOf(Collection::class, $images);

        foreach ($images as $image) {
            $this->assertInstanceOf(ProductImage::class, $image);
        }

        return $images->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     * @depends serviceApiFindsProductImages
     */
    public function serviceApiFindsSpecificProductImage($productId, $imageId)
    {
        $image = Product::find($productId)->images($imageId);

        $this->assertInstanceOf(ProductImage::class, $image);
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     */
    public function serviceApiFindsProductMaterials($productId)
    {
        $materials = Product::find($productId)->materials;

        $this->assertInstanceOf(Collection::class, $materials);

        foreach ($materials as $material) {
            $this->assertInstanceOf(ProductMaterial::class, $material);
        }

        return $materials->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     * @depends serviceApiFindsProductMaterials
     */
    public function serviceApiFindsSpecificProductMaterial($productId, $materialId)
    {
        $material = Product::find($productId)->materials($materialId);

        $this->assertInstanceOf(ProductMaterial::class, $material);
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     * @depends serviceApiFindsProductMaterials
     */
    public function serviceApiFindsProductSubMaterials($productId, $materialId)
    {
        $subMaterials = Product::find($productId)->materials($materialId)->materials;

        $this->assertInstanceOf(Collection::class, $subMaterials);

        foreach ($subMaterials as $subMaterial) {
            $this->assertInstanceOf(ProductMaterial::class, $subMaterial);
        }
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     * @depends serviceApiFindsProductMaterials
     */
    public function serviceApiFindsProductMaterialImages($productId, $materialId)
    {
        $images = Product::find($productId)->materials($materialId)->images;

        $this->assertInstanceOf(Collection::class, $images);

        foreach ($images as $image) {
            $this->assertInstanceOf(ProductMaterialImage::class, $image);
        }

        return $images->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     * @depends serviceApiFindsProductMaterials
     * @depends serviceApiFindsProductMaterialImages
     */
    public function serviceApiFindsSpecificProductMaterialImage($productId, $materialId, $imageId)
    {
        $image = Product::find($productId)->materials($materialId)->images($imageId);

        $this->assertInstanceOf(ProductMaterialImage::class, $image);
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     */
    public function serviceApiFindsProductPromotions($productId)
    {
        $promotions = Product::find($productId)->promotions;

        $this->assertInstanceOf(Collection::class, $promotions);

        foreach ($promotions as $promotion) {
            $this->assertInstanceOf(Promotion::class, $promotion);
        }
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     */
    public function serviceApiFindsProductServices($productId)
    {
        $services = Product::find($productId)->services;

        $this->assertInstanceOf(Collection::class, $services);

        foreach ($services as $service) {
            $this->assertInstanceOf(ProductService::class, $service);
        }

        return $services->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllProducts
     * @depends serviceApiFindsProductServices
     */
    public function serviceApiFindsSpecificProductService($productId, $serviceId)
    {
        $service = Product::find($productId)->services($serviceId);

        $this->assertInstanceOf(ProductService::class, $service);
    }
}
