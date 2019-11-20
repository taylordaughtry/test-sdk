<?php

require __DIR__ . '/../vendor/autoload.php';

if (! isset($_SERVER['APP_ENV'])) {
    Dotenv\Dotenv::create(__DIR__ . '/..', '.env.testing')->load();
}
