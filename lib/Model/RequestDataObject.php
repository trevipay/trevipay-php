<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model;

class RequestDataObject implements \JsonSerializable
{
    /**
     * @var array
     */
    protected $parameters = [];

    public function __construct(array $data = [])
    {
        $this->parameters = $data;
    }

    /**
     * @param string $key
     * @return mixed|null
     */
    protected function getData(string $key)
    {
        return $key === null ? $this->parameters : $this->parameters[$key] ?? null;
    }

    // phpcs:ignore
    protected function setData(string $key, $value): self
    {
        $this->parameters[$key] = $value;

        return $this;
    }

    private function getAllData(): array
    {
        return $this->parameters;
    }

    public function getRequestData(): array
    {
        return $this->getAllData();
    }

    public function jsonSerialize(): array
    {
        return $this->getRequestData();
    }
}
