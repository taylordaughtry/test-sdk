<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Material;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\Disclaimer;
use HappyCog\OsborneApi\ErpService\Model\MaterialImage;

class MaterialModelTest extends TestCase
{
    use IntegrationServiceApi;

    /** @test */
    public function serviceApiFindsAllMaterials()
    {
        $materials = Material::all();

        $this->assertInstanceOf(Collection::class, $materials);

        foreach ($materials as $material) {
            $this->assertInstanceOf(Material::class, $material);
        }

        return $materials->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllMaterials
     */
    public function serviceApiFindsASpecificMaterial($materialId)
    {
        $material = Material::find($materialId);

        $this->assertInstanceOf(Material::class, $material);
    }

    /**
     * @test
     * @depends serviceApiFindsAllMaterials
     */
    public function serviceApiFindsMaterialDisclaimers($materialId)
    {
        $disclaimers = Material::find($materialId)->disclaimers;

        $this->assertInstanceOf(Collection::class, $disclaimers);

        foreach ($disclaimers as $disclaimer) {
            $this->assertInstanceOf(Disclaimer::class, $disclaimer);
        }
    }

    /**
     * @test
     * @depends serviceApiFindsAllMaterials
     */
    public function serviceApiFindsMaterialImages($materialId)
    {
        $images = Material::find($materialId)->images;

        $this->assertInstanceOf(Collection::class, $images);

        foreach ($images as $image) {
            $this->assertInstanceOf(MaterialImage::class, $image);
        }

        return $images->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllMaterials
     * @depends serviceApiFindsMaterialImages
     */
    public function serviceApiFindsSpecificMaterialImage($materialId, $imageId)
    {
        $image = Material::find($materialId)->images($imageId);

        $this->assertInstanceOf(MaterialImage::class, $image);
    }
}
