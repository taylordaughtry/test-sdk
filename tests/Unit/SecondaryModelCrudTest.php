<?php

namespace HappyCog\Tests\Unit;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\MockServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Gizmo;
use HappyCog\OsborneApi\ErpService\Model\Thing;
use HappyCog\OsborneApi\Resources\Base\Collection;

class SecondaryModelCrudTest extends TestCase
{
    use MockServiceApi;

    /** @test */
    public function getsAllThingsForAGizmo()
    {
        $this->shouldCall('get', '/gizmos/123')
            ->returning([
                'id' => 123,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ]);

        $this->shouldCall('get', '/gizmos/123/things')
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

        $things = Gizmo::find(123)->things;

        $this->assertInstanceOf(Collection::class, $things);
        $this->assertEquals(2, count($things));
        $this->assertInstanceOf(Thing::class, $things[0]);
        $this->assertInstanceOf(Thing::class, $things[1]);
        $this->assertEquals(1, $things[0]->getId());
        $this->assertEquals('foobar', $things[0]->getName());
        $this->assertEquals(123, $things[0]->getCount());
        $this->assertEquals(true, $things[0]->getActive());
        $this->assertEquals(2, $things[1]->getId());
        $this->assertEquals('barbaz', $things[1]->getName());
        $this->assertEquals(234, $things[1]->getCount());
        $this->assertEquals(false, $things[1]->getActive());
    }

    /** @test */
    public function findsASpecificThingForAGizmo()
    {
        $this->shouldCall('get', '/gizmos/123')
            ->returning([
                'id' => 123,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ]);

        $this->shouldCall('get', '/gizmos/123/things/234')
            ->returning([
                'id' => 234,
                'name' => 'barbaz',
                'count' => 345,
                'active' => true,
            ]);

        $thing = Gizmo::find(123)->things(234);

        $this->assertInstanceOf(Thing::class, $thing);
        $this->assertEquals(234, $thing->getId());
        $this->assertEquals('barbaz', $thing->getName());
        $this->assertEquals(345, $thing->getCount());
        $this->assertEquals(true, $thing->getActive());
    }

    /** @test */
    public function createsAThingForAGizmoStatically()
    {
        $this->shouldCall('get', '/gizmos/123')
            ->returning([
                'id' => 123,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ]);

        $this->shouldCall('get', '/gizmos/123/things')
            ->returning([]);

        $this->shouldCall('post', '/gizmos/123/things', [
                'name' => 'barbaz',
                'count' => 345,
                'active' => true,
            ])
            ->returning([
                'id' => 234,
                'name' => 'barbaz',
                'count' => 345,
                'active' => true,
            ]);

        $thing = Gizmo::find(123)->things->create([
                'name' => 'barbaz',
                'count' => 345,
            ]);

        $this->assertInstanceOf(Thing::class, $thing);
        $this->assertEquals(234, $thing->getId());
        $this->assertEquals('barbaz', $thing->getName());
        $this->assertEquals(345, $thing->getCount());
        $this->assertEquals(true, $thing->getActive());
    }

    /** @test */
    public function updatesAnExistingThingForAGizmo()
    {
        $this->shouldCall('get', '/gizmos/123')
            ->returning([
                'id' => 123,
            ]);

        $this->shouldCall('get', '/gizmos/123/things/234')
            ->returning([
                'id' => 234,
                'name' => 'barbaz',
                'count' => 345,
                'active' => true,
            ]);

        $thing = Gizmo::find(123)->things(234);

        $this->assertInstanceOf(Thing::class, $thing);
        $this->assertEquals(234, $thing->getId());
        $this->assertEquals('barbaz', $thing->getName());
        $this->assertEquals(345, $thing->getCount());
        $this->assertEquals(true, $thing->getActive());

        $this->shouldCall('put', '/gizmos/123/things/234', [
                'id' => 234,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ])
            ->returning([
                'id' => 234,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ]);

        $thing->update([
            'name' => 'foobar',
            'count' => 234,
        ]);

        $this->assertInstanceOf(Thing::class, $thing);
        $this->assertEquals(234, $thing->getId());
        $this->assertEquals('foobar', $thing->getName());
        $this->assertEquals(234, $thing->getCount());
        $this->assertEquals(true, $thing->getActive());
    }

    /** @test */
    public function deletesAnExistingThingFromAGizmo()
    {
        $this->shouldCall('get', '/gizmos/123')
            ->returning([
                'id' => 123,
            ]);

        $this->shouldCall('get', '/gizmos/123/things/234')
            ->returning([
                'id' => 234,
                'name' => 'barbaz',
                'count' => 345,
                'active' => true,
            ]);

        $thing = Gizmo::find(123)->things(234);

        $this->assertInstanceOf(Thing::class, $thing);
        $this->assertEquals(234, $thing->getId());
        $this->assertEquals('barbaz', $thing->getName());
        $this->assertEquals(345, $thing->getCount());
        $this->assertEquals(true, $thing->getActive());

        $this->shouldCall('delete', '/gizmos/123/things/234')
            ->returning([
                'success' => true,
            ]);

        $response = $thing->delete();

        $this->assertIsArray($response);
        $this->assertArrayHasKey('success', $response);
        $this->assertTrue($response['success']);
    }
}
