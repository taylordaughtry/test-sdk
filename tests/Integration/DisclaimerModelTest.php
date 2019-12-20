<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\IntegrationServiceApi;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\Disclaimer;

class DisclaimerModelTest extends TestCase
{
    use IntegrationServiceApi;

    /** @test */
    public function serviceApiFindsAllDisclaimers()
    {
        $disclaimers = Disclaimer::all();

        $this->assertInstanceOf(Collection::class, $disclaimers);

        foreach ($disclaimers as $disclaimer) {
            $this->assertInstanceOf(Disclaimer::class, $disclaimer);
        }

        return $disclaimers->first()->id;
    }

    /**
     * @test
     * @depends serviceApiFindsAllDisclaimers
     */
    public function serviceApiFindsASpecificDisclaimer($disclaimerId)
    {
        $disclaimer = Disclaimer::find($disclaimerId);

        $this->assertInstanceOf(Disclaimer::class, $disclaimer);
    }
}
