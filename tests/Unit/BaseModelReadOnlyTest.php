<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\MockServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Device;
use HappyCog\OsborneApi\Resources\Exceptions\BadResourceMethodException;

class BaseModelReadOnlyTest extends TestCase
{
    use MockServiceApi;

    /** @test */
    public function getsAllDevices()
    {
        $this->shouldCall('get', '/devices')
            ->returning([
                [
                    'id' => 1,
                    'name' => 'foobar',
                    'count' => 123,
                    'active' => true,
                ],
                [
                    'id' => 2,
                    'name' => 'barbaz',
                    'count' => 234,
                    'active' => false,
                ]
            ]);

        $devices = Device::all();

        $this->assertIsArray($devices);
        $this->assertEquals(2, count($devices));
        $this->assertInstanceOf(Device::class, $devices[0]);
        $this->assertInstanceOf(Device::class, $devices[1]);
        $this->assertEquals(1, $devices[0]->getId());
        $this->assertEquals('foobar', $devices[0]->getName());
        $this->assertEquals(123, $devices[0]->getCount());
        $this->assertEquals(true, $devices[0]->getActive());
        $this->assertEquals(2, $devices[1]->getId());
        $this->assertEquals('barbaz', $devices[1]->getName());
        $this->assertEquals(234, $devices[1]->getCount());
        $this->assertEquals(false, $devices[1]->getActive());
    }

    /** @test */
    public function findsASpecificDevice()
    {
        $this->shouldCall('get', '/devices/123')
            ->returning([
                'id' => 123,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ]);

        $device = Device::find(123);

        $this->assertInstanceOf(Device::class, $device);
        $this->assertEquals(123, $device->getId());
        $this->assertEquals('foobar', $device->getName());
        $this->assertEquals(234, $device->getCount());
        $this->assertEquals(true, $device->getActive());
    }

    /** @test */
    public function creatingADeviceThrowsException()
    {
        $this->expectException(BadResourceMethodException::class);

        Device::create([
            'name' => 'foobar',
        ]);
    }

    /** @test */
    public function updatingAnExistingDeviceThrowsException()
    {
        $this->shouldCall('get', '/devices/123')
            ->returning([
                'id' => 123,
            ]);

        $device = Device::find(123);
        $this->assertInstanceOf(Device::class, $device);

        $this->expectException(BadResourceMethodException::class);

        $device->update([
            'name' => 'foobar',
        ]);
    }

    /** @test */
    public function deletingAnExistingDeviceThrowsException()
    {
        $this->shouldCall('get', '/devices/123')
            ->returning([
                'id' => 123,
            ]);

        $device = Device::find(123);
        $this->assertInstanceOf(Device::class, $device);

        $this->expectException(BadResourceMethodException::class);

        $device->delete();
    }

    /** @test */
    public function destroyADeviceStaticallyThrowsException()
    {
        $this->expectException(BadResourceMethodException::class);

        Device::destroy(123);
    }
}
