<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Material;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\Disclaimer;
use HappyCog\OsborneApi\ErpService\Model\MaterialImage;

class MaterialModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllMaterials()
    {
        $materials = Material::all();

        $this->assertInstanceOf(Collection::class, $materials);

        foreach ($materials as $material) {
            $this->assertInstanceOf(Material::class, $material);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificMaterial()
    {
        $material = Material::find(1);

        $this->assertInstanceOf(Material::class, $material);
    }

    /** @test */
    public function serviceApiFindsMaterialDisclaimers()
    {
        $disclaimers = Material::find(1)->disclaimers;

        $this->assertInstanceOf(Collection::class, $disclaimers);

        foreach ($disclaimers as $disclaimer) {
            $this->assertInstanceOf(Disclaimer::class, $disclaimer);
        }
    }

    /** @test */
    public function serviceApiFindsMaterialImages()
    {
        $images = Material::find(1)->images;

        $this->assertInstanceOf(Collection::class, $images);

        foreach ($images as $image) {
            $this->assertInstanceOf(MaterialImage::class, $image);
        }
    }

    /** @test */
    public function serviceApiFindsSpecificMaterialImage()
    {
        $image = Material::find(1)->images(2);

        $this->assertInstanceOf(MaterialImage::class, $image);
    }
}
