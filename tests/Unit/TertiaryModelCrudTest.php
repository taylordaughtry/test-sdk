<?php

namespace HappyCog\Tests\Unit;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\MockServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Gizmo;
use HappyCog\OsborneApi\ErpService\Model\Thing;
use HappyCog\OsborneApi\ErpService\Model\Widget;
use HappyCog\OsborneApi\Resources\Base\Collection;

class TertiaryModelCrudTest extends TestCase
{
    use MockServiceApi;

    /** @test */
    public function getsAllWidgetsForAGizmoThing()
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

        $this->shouldCall('get', '/gizmos/123/things/234/widgets')
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

        $widgets = Gizmo::find(123)->things(234)->widgets;

        $this->assertInstanceOf(Collection::class, $widgets);
        $this->assertEquals(2, count($widgets));
        $this->assertInstanceOf(Widget::class, $widgets[0]);
        $this->assertInstanceOf(Widget::class, $widgets[1]);
        $this->assertEquals(1, $widgets[0]->getId());
        $this->assertEquals('foobar', $widgets[0]->getName());
        $this->assertEquals(123, $widgets[0]->getCount());
        $this->assertEquals(true, $widgets[0]->getActive());
        $this->assertEquals(2, $widgets[1]->getId());
        $this->assertEquals('barbaz', $widgets[1]->getName());
        $this->assertEquals(234, $widgets[1]->getCount());
        $this->assertEquals(false, $widgets[1]->getActive());
    }

    /** @test */
    public function findsASpecificWidgetForAGizmoThing()
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

        $this->shouldCall('get', '/gizmos/123/things/234/widgets/345')
            ->returning([
                'id' => 345,
                'name' => 'bazqux',
                'count' => 456,
                'active' => true,
            ]);

        $widget = Gizmo::find(123)->things(234)->widgets(345);

        $this->assertInstanceOf(Widget::class, $widget);
        $this->assertEquals(345, $widget->getId());
        $this->assertEquals('bazqux', $widget->getName());
        $this->assertEquals(456, $widget->getCount());
        $this->assertEquals(true, $widget->getActive());
    }

    /** @test */
    public function createsAWidgetForAGizmoThingStatically()
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

        $this->shouldCall('get', '/gizmos/123/things/234/widgets')
            ->returning([]);

        $this->shouldCall('post', '/gizmos/123/things/234/widgets', [
                'name' => 'bazqux',
                'count' => 456,
                'active' => true,
            ])
            ->returning([
                'id' => 345,
                'name' => 'bazqux',
                'count' => 456,
                'active' => true,
            ]);

        $widget = Gizmo::find(123)->things(234)->widgets->create([
                'name' => 'bazqux',
                'count' => 456,
            ]);

        $this->assertInstanceOf(Widget::class, $widget);
        $this->assertEquals(345, $widget->getId());
        $this->assertEquals('bazqux', $widget->getName());
        $this->assertEquals(456, $widget->getCount());
        $this->assertEquals(true, $widget->getActive());
    }

    /** @test */
    public function updatesAnExistingWidgetForAGizmoThing()
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

        $this->shouldCall('get', '/gizmos/123/things/234/widgets/345')
            ->returning([
                'id' => 345,
                'name' => 'bazqux',
                'count' => 456,
                'active' => true,
            ]);

        $widget = Gizmo::find(123)->things(234)->widgets(345);

        $this->assertInstanceOf(Widget::class, $widget);
        $this->assertEquals(345, $widget->getId());
        $this->assertEquals('bazqux', $widget->getName());
        $this->assertEquals(456, $widget->getCount());
        $this->assertEquals(true, $widget->getActive());

        $this->shouldCall('put', '/gizmos/123/things/234/widgets/345', [
                'id' => 345,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ])
            ->returning([
                'id' => 345,
                'name' => 'foobar',
                'count' => 234,
                'active' => true,
            ]);

        $widget->update([
            'name' => 'foobar',
            'count' => 234,
        ]);

        $this->assertInstanceOf(Widget::class, $widget);
        $this->assertEquals(345, $widget->getId());
        $this->assertEquals('foobar', $widget->getName());
        $this->assertEquals(234, $widget->getCount());
        $this->assertEquals(true, $widget->getActive());
    }

    /** @test */
    public function deletesAnExistingWidgetFromAGizmoThing()
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
