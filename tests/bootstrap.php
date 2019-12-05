<?php

require __DIR__ . '/../vendor/autoload.php';

if (! isset($_SERVER['APP_ENV']) && file_exists('.env.testing')) {
    Dotenv\Dotenv::create(__DIR__ . '/..', '.env.testing')->load();
}
