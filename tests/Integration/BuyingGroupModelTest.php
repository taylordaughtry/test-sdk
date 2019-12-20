<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\BuyingGroup;

class BuyingGroupModelTest extends TestCase
{
    use IntegrationServiceApi;

    /** @test */
    public function serviceApiFindsAllBuyingGroups()
    {
        $buyingGroups = BuyingGroup::all();

        $this->assertInstanceOf(Collection::class, $buyingGroups);

        foreach ($buyingGroups as $buyingGroup) {
            $this->assertInstanceOf(BuyingGroup::class, $buyingGroup);
        }

        return $buyingGroups->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllBuyingGroups
     */
    public function serviceApiFindsASpecificBuyingGroup($buyingGroupId)
    {
        $buyingGroup = BuyingGroup::find($buyingGroupId);

        $this->assertInstanceOf(BuyingGroup::class, $buyingGroup);
    }
}
