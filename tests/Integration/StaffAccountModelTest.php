<?php

namespace HappyCog\Tests\Integration;

use HappyCog\Tests\TestCase;
use HappyCog\Tests\Traits\SwaggerServiceApi;
use HappyCog\OsborneApi\Resources\Base\Collection;
use HappyCog\OsborneApi\ErpService\Model\StaffAccount;

class StaffAccountModelTest extends TestCase
{
    use SwaggerServiceApi;

    /** @test */
    public function serviceApiFindsAllStaffAccounts()
    {
        $staffAccounts = StaffAccount::all();

        $this->assertInstanceOf(Collection::class, $staffAccounts);

        foreach ($staffAccounts as $staffAccount) {
            $this->assertInstanceOf(StaffAccount::class, $staffAccount);
        }
    }

    /** @test */
    public function serviceApiFindsASpecificStaffAccount()
    {
        $staffAccount = StaffAccount::find(1);

        $this->assertInstanceOf(StaffAccount::class, $staffAccount);
    }
}
