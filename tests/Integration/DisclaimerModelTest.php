<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\Disclaimer;

class DisclaimerModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllDisclaimers()
    {
        $disclaimers = Disclaimer::all();

        $this->assertInstanceOf(Collection::class, $disclaimers);

        foreach ($disclaimers as $disclaimer) {
            $this->assertInstanceOf(Disclaimer::class, $disclaimer);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificDisclaimer()
    {
        $disclaimer = Disclaimer::find(1);

        $this->assertInstanceOf(Disclaimer::class, $disclaimer);
    }
}
