<?php


namespace TreviPay\TreviPay\Http;

class TransferBuilder
{
    /**
     * @var string
     */
    private $methodName;

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $body = '';

    /**
     * @var string|null
     */
    private $uri;

    /**
     * @var array
     */
    private $debugData = [];

    /**
     * @var int
     */
    private $expectedStatusCode = 200;

    /**
     * @var array
     */
    private $headers = [];

    public function setMethodName(string $methodName): self
    {
        $this->methodName = $methodName;

        return $this;
    }

    public function setHttpMethod(string $httpMethod): self
    {
        $this->httpMethod = $httpMethod;

        return $this;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function setUri(string $uri): self
    {
        $this->uri = $uri;

        return $this;
    }

    public function setDebugData(array $debugData): self
    {
        $this->debugData = $debugData;

        return $this;
    }

    public function setExpectedStatusCode(int $expectedStatusCode): self
    {
        $this->expectedStatusCode = $expectedStatusCode;

        return $this;
    }

    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function build(): Transfer
    {
        return new Transfer(
            $this->methodName,
            $this->headers,
            $this->body,
            $this->debugData,
            $this->httpMethod,
            $this->uri,
            $this->expectedStatusCode
        );
    }
}
