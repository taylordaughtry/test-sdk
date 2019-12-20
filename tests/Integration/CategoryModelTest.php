<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Category;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\CategoryImage;

class CategoryModelTest extends TestCase
{
    use IntegrationServiceApi;

    /** @test */
    public function serviceApiFindsAllCategories()
    {
        $categories = Category::all();

        $this->assertInstanceOf(Collection::class, $categories);

        foreach ($categories as $category) {
            $this->assertInstanceOf(Category::class, $category);
        }

        return $categories->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllCategories
     */
    public function serviceApiFindsASpecificCategory($categoryId)
    {
        $category = Category::find($categoryId);

        $this->assertInstanceOf(Category::class, $category);
    }

    /**
     * @test
     * @depends serviceApiFindsAllCategories
     */
    public function serviceApiFindsCategoryImages($categoryId)
    {
        $images = Category::find($categoryId)->images;

        $this->assertInstanceOf(Collection::class, $images);

        foreach ($images as $image) {
            $this->assertInstanceOf(CategoryImage::class, $image);
        }

        return $images->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllCategories
     * @depends serviceApiFindsCategoryImages
     */
    public function serviceApiFindsSpecificCategoryImage($categoryId, $imageId)
    {
        $image = Category::find($categoryId)->images($imageId);

        $this->assertInstanceOf(CategoryImage::class, $image);
    }
}
