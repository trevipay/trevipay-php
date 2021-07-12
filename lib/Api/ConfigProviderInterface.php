<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api;

interface ConfigProviderInterface
{
    /**
     * @return string|null
     */
    public function getApiKey(): ?string;

    /**
     * @param string $methodName
     * @param string|null $id
     * @param bool $maskId
     * @return string
     */
    public function getUri(string $methodName, ?string $id = null, bool $maskId = false): string;
}
