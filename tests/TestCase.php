<?php

namespace HappyCog\Tests;

use GuzzleHttp\Client;
use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\VarDumper\Cloner\Stub;
use PHPUnit\Framework\TestCase as BaseTestCase;
use HappyCog\OsborneApi\Resources\Base\ApiClient;
use Symfony\Component\VarDumper\Cloner\VarCloner;

class TestCase extends BaseTestCase
{
    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // This hides the defined objects from `dd()` when they're nested.
        VarCloner::$defaultCasters[ApiClient::class] = function (...$args) {
            return $args[3] ? false : $args[1];
        };
        VarCloner::$defaultCasters[Client::class] = function (...$args) {
            return $args[3] ? false : $args[1];
        };
    }
}
