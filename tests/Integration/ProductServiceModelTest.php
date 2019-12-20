<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Material;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\Disclaimer;
use HappyCog\OsborneApi\ErpService\Model\ProductService;

class ProductServiceModelTest extends TestCase
{
    use IntegrationServiceApi;

    /** @test */
    public function serviceApiFindsAllProductServices()
    {
        $productServices = ProductService::all();

        $this->assertInstanceOf(Collection::class, $productServices);

        foreach ($productServices as $productService) {
            $this->assertInstanceOf(ProductService::class, $productService);
        }

        return $productServices->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllProductServices
     */
    public function serviceApiFindsASpecificProductService($productServiceId)
    {
        $productService = ProductService::find($productServiceId);

        $this->assertInstanceOf(ProductService::class, $productService);
    }

    /**
     * @test
     * @depends serviceApiFindsAllProductServices
     */
    public function serviceApiFindsProductServiceDisclaimers($productServiceId)
    {
        $disclaimers = ProductService::find($productServiceId)->disclaimers;

        $this->assertInstanceOf(Collection::class, $disclaimers);

        foreach ($disclaimers as $disclaimer) {
            $this->assertInstanceOf(Disclaimer::class, $disclaimer);
        }
    }

    /**
     * @test
     * @depends serviceApiFindsAllProductServices
     */
    public function serviceApiFindsProductServiceMaterials($productServiceId)
    {
        $materials = ProductService::find($productServiceId)->materials;

        $this->assertInstanceOf(Collection::class, $materials);

        foreach ($materials as $material) {
            $this->assertInstanceOf(Material::class, $material);
        }
    }
}
