<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\MockServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Device;

class BaseModelInteractionTest extends TestCase
{
    use MockServiceApi;

    /** @test */
    public function modelsCanSetAttributesByAssignment()
    {
        $devices = new Device();

        $this->assertNull($devices->name);

        $devices->name = 'foobar';

        $this->assertEquals($devices->name, 'foobar');
    }

    /** @test */
    public function modelsCanSetAttributesByMethod()
    {
        $devices = new Device();

        $this->assertNull($devices->name);

        $devices->setName('foobar');

        $this->assertEquals($devices->name, 'foobar');
    }

    /** @test */
    public function modelsCanSetAttributesByConstructor()
    {
        $devices = new Device([
            'name' => 'foobar',
        ]);

        $this->assertEquals($devices->name, 'foobar');
    }
}
