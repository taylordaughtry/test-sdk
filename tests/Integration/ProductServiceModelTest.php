<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Material;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\Disclaimer;
use HappyCog\OsborneApi\ErpService\Model\ProductService;

class ProductServiceModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllProductServices()
    {
        $productServices = ProductService::all();

        $this->assertInstanceOf(Collection::class, $productServices);

        foreach ($productServices as $productService) {
            $this->assertInstanceOf(ProductService::class, $productService);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificProductService()
    {
        $productService = ProductService::find(1);

        $this->assertInstanceOf(ProductService::class, $productService);
    }

    /** @test */
    public function serviceApiFindsProductServiceDisclaimers()
    {
        $disclaimers = ProductService::find(1)->disclaimers;

        $this->assertInstanceOf(Collection::class, $disclaimers);

        foreach ($disclaimers as $disclaimer) {
            $this->assertInstanceOf(Disclaimer::class, $disclaimer);
        }
    }

    /** @test */
    public function serviceApiFindsProductServiceMaterials()
    {
        $materials = ProductService::find(1)->materials;

        $this->assertInstanceOf(Collection::class, $materials);

        foreach ($materials as $material) {
            $this->assertInstanceOf(Material::class, $material);
        }
    }
}
