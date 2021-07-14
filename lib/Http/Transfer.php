<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Http;

class Transfer
{
    /**
     * @var string
     */
    private $methodName;

    /**
     * @var array
     */
    private $headers;

    /**
     * @var string
     */
    private $body;

    /**
     * @var array
     */
    private $debugData;

    /**
     * @var string
     */
    private $httpMethod;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var int
     */
    private $expectedStatusCode;

    public function __construct(
        string $methodName,
        array $headers,
        string $body,
        array $debugData,
        string $httpMethod,
        string $uri,
        int $expectedStatusCode
    ) {
        $this->methodName = $methodName;
        $this->headers = $headers;
        $this->body = $body;
        $this->debugData = $debugData;
        $this->httpMethod = $httpMethod;
        $this->uri = $uri;
        $this->expectedStatusCode = $expectedStatusCode;
    }

    public function getMethodName(): string
    {
        return $this->methodName;
    }

    public function getHttpMethod(): string
    {
        return $this->httpMethod;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getDebugData(): array
    {
        return $this->debugData;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getExpectedStatusCode(): int
    {
        return $this->expectedStatusCode;
    }
}
