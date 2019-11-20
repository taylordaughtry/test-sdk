<?php

namespace HappyCog\Tests\Traits;

use Exception;
use GuzzleHttp\Client;
use OutOfBoundsException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Handler\MockHandler;
use Psr\Http\Message\RequestInterface;
use HappyCog\OsborneApi\ErpService\Configuration;
use HappyCog\Tests\Exceptions\MockServiceApiException;
use HappyCog\OsborneApi\Resources\Base\ApiClientFactory;

trait MockServiceApi
{
    /**
     * Guzzle calls that are expected to be called
     *
     * @var array
     */
    protected $expectedCalls = [];

    /**
     * The mock hostname for guzzle
     *
     * @var string
     */
    protected $mockHostUrl = 'https://mockhost.net/api';

    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->mockHandler = new MockHandler();

        $this->mockedClient = new class(['handler' => HandlerStack::create($this->mockHandler)], $this) extends Client {
            public function __construct(array $config = [], $parentTest = null)
            {
                parent::__construct($config);
                $this->parentTest = $parentTest;
            }

            public function send(RequestInterface $request, array $options = [])
            {
                $this->parentTest->sendCalled($request, $options);

                return parent::send($request, $options);
            }
        };

        ApiClientFactory::setHttpClient($this->mockedClient);

        $config = new Configuration();
        $config->setHost($this->mockHostUrl);

        ApiClientFactory::setConfig($config);
    }

    /**
     * Override the base PhpUnit runTest method to catch OutOfBoundsException warnings
     */
    public function runTest()
    {
        try {
            return parent::runTest();
        } catch (OutOfBoundsException $exception) {
            if ($exception->getMessage() === 'Mock queue is empty') {
                throw new MockServiceApiException("Guzzle attempted to respond to a request, but no returning expectations have been set.\nEnsure that all uses of \$this->shouldCall(...) are paired with ->returning(...) methods.", 0, $exception);
            }

            throw $exception;
        }
    }

    /**
     * Make an assertment against the expected
     * @param RequestInterface $request
     * @param array $options
     * @return [type]
     */
    public function sendCalled(RequestInterface $request, array $options = [])
    {
        if (empty($this->expectedCalls)) {
            throw new Exception(sprintf(
                "Guzzle attempted to send %s request to %s, but no expectations have been set. Use \$this->shouldCall(...)->returning(...) to define an expectation.",
                $request->getMethod(),
                $request->getUri()->__toString()
            ));
        }

        $call = array_shift($this->expectedCalls);

        list($method, $endpoint, $body) = [
            $request->getMethod(),
            $request->getUri()->__toString(),
            $request->getBody()->__toString(),
        ];

        $this->assertEqualsIgnoringCase(
            $call['method'] ?? '',
            $method,
            "{$call['file']}:{$call['line']}\nGuzzle received unmatched request method: $method"
        );

        $this->assertEquals(
            $this->mockHostUrl . $call['endpoint'] ?? '',
            $endpoint,
            "{$call['file']}:{$call['line']}\nGuzzle received unmatched request endpoint: $endpoint"
        );

        $this->assertEquals(
            $call['body'] ?? '',
            $body,
            "{$call['file']}:{$call['line']}\nGuzzle received unmatched request body: $body"
        );

        return $this;
    }

    /**
     * Set an expectation that guzzle will call a specific endpoint
     *
     * @param string $method
     * @param string $endpoint
     * @param mixed $body
     *
     * @return $this
     */
    protected function shouldCall(string $method, string $endpoint = '', $body = null)
    {
        $backtrace = debug_backtrace(null, 1)[0];

        $this->expectedCalls[] = [
            'method' => $method,
            'endpoint' => $endpoint,
            'body' => is_null($body) ? '' : json_encode($body, JSON_PRETTY_PRINT),
            'file' => $backtrace['file'],
            'line' => $backtrace['line'],
        ];

        return $this;
    }

    /**
     * Set an expectation that guzzle will return a specific payload
     *
     * @param array $body
     * @param integer $status
     * @param array $headers
     *
     * @return $this
     */
    protected function returning($body = [], $status = 200, $headers = [])
    {
        $this->mockHandler->append(new Response($status, $headers, json_encode($body)));

        return $this;
    }
}
