<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\MockServiceApi;
use HappyCog\OsborneApi\ErpService\Model\Device;

class BaseModelInvalidActionsTest extends TestCase
{
    use MockServiceApi;

    /** @test */
    public function cannotUpdateModelThatDoesntExist()
    {
        $model = new Device([
            'name' => 'foobar',
        ]);

        $this->assertNotTrue($model->update([
            'name' => 'barbaz',
        ]));
    }

    /** @test */
    public function cannotDeleteModelThatDoesntExist()
    {
        $model = new Device([
            'name' => 'foobar',
        ]);

        $this->assertNotTrue($model->delete());
    }
}
