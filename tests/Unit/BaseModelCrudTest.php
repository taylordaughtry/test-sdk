<?php

namespace HappyCog\Tests\Unit;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\MockServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Gizmo;
use HappyCog\OsborneApi\Resources\Base\Collection;

class BaseModelCrudTest extends TestCase
{
    use MockServiceApi;

    /** @test */
    public function getsAllGizmos()
    {
        $this->shouldCall('get', '/gizmos')
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

        $gizmos = Gizmo::all();

        $this->assertInstanceOf(Collection::class, $gizmos);
        $this->assertEquals(2, count($gizmos));
        $this->assertInstanceOf(Gizmo::class, $gizmos[0]);
        $this->assertInstanceOf(Gizmo::class, $gizmos[1]);
        $this->assertEquals(1, $gizmos[0]->getId());
        $this->assertEquals('foobar', $gizmos[0]->getName());
        $this->assertEquals(123, $gizmos[0]->getCount());
        $this->assertEquals(true, $gizmos[0]->getActive());
        $this->assertEquals(2, $gizmos[1]->getId());
        $this->assertEquals('barbaz', $gizmos[1]->getName());
        $this->assertEquals(234, $gizmos[1]->getCount());
        $this->assertEquals(false, $gizmos[1]->getActive());
    }

    /** @test */
    public function findsASpecificGizmo()
    {
        $this->shouldCall('get', '/gizmos/123')
            ->returning([
                'id' => 123,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ]);

        $gizmo = Gizmo::find(123);

        $this->assertInstanceOf(Gizmo::class, $gizmo);
        $this->assertEquals(123, $gizmo->getId());
        $this->assertEquals('foobar', $gizmo->getName());
        $this->assertEquals(234, $gizmo->getCount());
        $this->assertEquals(true, $gizmo->getActive());
    }

    /** @test */
    public function createsAGizmoBySaving()
    {
        $this->shouldCall('post', '/gizmos', [
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ])
            ->returning([
                'id' => 123,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ]);

        $gizmo = new Gizmo([
            'name' => 'foobar',
            'count' => 234,
        ]);

        $this->assertInstanceOf(Gizmo::class, $gizmo);
        $this->assertNotTrue($gizmo->exists);

        $gizmo->save();

        $this->assertInstanceOf(Gizmo::class, $gizmo);
        $this->assertTrue($gizmo->exists);
        $this->assertEquals(123, $gizmo->getId());
        $this->assertEquals('foobar', $gizmo->getName());
        $this->assertEquals(234, $gizmo->getCount());
        $this->assertEquals(true, $gizmo->getActive());
    }

    /** @test */
    public function createsAGizmoStatically()
    {
        $this->shouldCall('post', '/gizmos', [
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ])
            ->returning([
                'id' => 123,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ]);

        $gizmo = Gizmo::create([
                'name' => 'foobar',
                'count' => 234,
            ]);

        $this->assertInstanceOf(Gizmo::class, $gizmo);
        $this->assertEquals(123, $gizmo->getId());
        $this->assertEquals('foobar', $gizmo->getName());
        $this->assertEquals(234, $gizmo->getCount());
        $this->assertEquals(true, $gizmo->getActive());
    }

    /** @test */
    public function updatesAnExistingGizmo()
    {
        $this->shouldCall('get', '/gizmos/123')
            ->returning([
                'id' => 123,
            ]);

        $this->shouldCall('put', '/gizmos/123', [
                'id' => 123,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ])
            ->returning([
                'id' => 123,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ]);

        $gizmo = Gizmo::find(123)->update([
                'name' => 'foobar',
                'count' => 234,
            ]);

        $this->assertInstanceOf(Gizmo::class, $gizmo);
        $this->assertEquals(123, $gizmo->getId());
        $this->assertEquals('foobar', $gizmo->getName());
        $this->assertEquals(234, $gizmo->getCount());
        $this->assertEquals(true, $gizmo->getActive());
    }

    /** @test */
    public function deletesAnExistingGizmo()
    {
        $this->shouldCall('get', '/gizmos/123')
            ->returning([
                'id' => 123,
            ]);

        $gizmo = Gizmo::find(123);
        $this->assertInstanceOf(Gizmo::class, $gizmo);

        $this->shouldCall('delete', '/gizmos/123')
            ->returning([
                'success' => true,
            ]);

        $response = $gizmo->delete();

        $this->assertIsArray($response);
        $this->assertArrayHasKey('success', $response);
        $this->assertTrue($response['success']);
    }

    /** @test */
    public function destroyAGizmoStatically()
    {
        $this->shouldCall('delete', '/gizmos/123')
            ->returning([
                'success' => true,
            ]);

        $response = Gizmo::destroy(123);

        $this->assertIsArray($response);
        $this->assertArrayHasKey('success', $response);
        $this->assertTrue($response['success']);
    }
}
