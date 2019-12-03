<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Category;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\CategoryImage;

class CategoryModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllCategories()
    {
        $categories = Category::all();

        $this->assertInstanceOf(Collection::class, $categories);

        foreach ($categories as $category) {
            $this->assertInstanceOf(Category::class, $category);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificCategory()
    {
        $category = Category::find(1);

        $this->assertInstanceOf(Category::class, $category);
    }

    /** @test */
    public function serviceApiFindsCategoryImages()
    {
        $images = Category::find(1)->images;

        $this->assertInstanceOf(Collection::class, $images);

        foreach ($images as $image) {
            $this->assertInstanceOf(CategoryImage::class, $image);
        }
    }

    /** @test */
    public function serviceApiFindsSpecificCategoryImage()
    {
        $image = Category::find(1)->images(2);

        $this->assertInstanceOf(CategoryImage::class, $image);
    }
}
