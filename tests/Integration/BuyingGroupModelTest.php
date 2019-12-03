<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\BuyingGroup;

class BuyingGroupModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllBuyingGroups()
    {
        $buyingGroups = BuyingGroup::all();

        $this->assertInstanceOf(Collection::class, $buyingGroups);

        foreach ($buyingGroups as $buyingGroup) {
            $this->assertInstanceOf(BuyingGroup::class, $buyingGroup);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificBuyingGroup()
    {
        $buyingGroup = BuyingGroup::find(1);

        $this->assertInstanceOf(BuyingGroup::class, $buyingGroup);
    }
}
