<?php

namespace HappyCog\Tests\Traits;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleRetry\GuzzleRetryMiddleware;
use HappyCog\OsborneApi\ErpService\Configuration;
use HappyCog\OsborneApi\Resources\Base\ApiClient\Factory;

trait IntegrationServiceApi
{
    /**
     * This method is called before each test.
     *
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    protected function setUp(): void
    {
        parent::setUp();

        $specUrl = env(
            'MOCK_SPEC_URL',
            'http://osborne-mock.test.vmgdev.com/api'
        );

        list($server, $path) = $this->parseSpecUrl($specUrl);

        $config = new Configuration();
        $config->setHost($server . $path);

        $config->setAccessToken(env('MOCK_AUTH_TOKEN', md5(rand())));

        Factory::setConfig($config);

        // This is really only necessary when defaulting to the swagger auto mock endpoint
        $stack = HandlerStack::create();
        $stack->push(GuzzleRetryMiddleware::factory([
            'default_retry_multiplier' => 15,
            'on_retry_callback' => function ($attempt, $delay, $request) use ($path) {
                $path = ltrim(str_replace($path, '', $request->getUri()->getPath()), '/');

                echo in_array('--debug', $_SERVER['argv'], true) ?
                    "\tMock server rate limit: \"/$path\" - Attempt #$attempt, Waiting $delay seconds for retry\n" :
                    "\xF0\x9F\x92\xA4"; //💤

                ob_flush();
            }
        ]));

        $client = new Client([
            'handler' => $stack,
            'verify' => false,
        ]);

        Factory::setHttpClient($client);
    }

    /**
     * Parse the spec url into parts
     *
     * @param string $specUrl
     *
     * @return array
     */
    protected function parseSpecUrl(string $specUrl)
    {
        $scheme = parse_url($specUrl, PHP_URL_SCHEME);
        $host = parse_url($specUrl, PHP_URL_HOST);
        $port = parse_url($specUrl, PHP_URL_PORT);

        return [
            sprintf('%s://%s%s', $scheme, $host, $port ? ':' . $port : ''),
            parse_url($specUrl, PHP_URL_PATH) ?? ''
        ];
    }
}
