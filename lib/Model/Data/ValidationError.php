<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data;

use TreviPay\TreviPay\Api\Data\ValidationErrorInterface;

class ValidationError implements ValidationErrorInterface
{
    public const DATA_PATH = 'dataPath';
    public const MESSAGE = 'message';

    /**
     * @var array
     */
    private $parameters = [];

    /**
     * @return string|null
     */
    public function getDataPath(): ?string
    {
        return $this->parameters[self::DATA_PATH] ?? null;
    }

    /**
     * @param string $dataPath
     * @return ValidationErrorInterface
     */
    public function setDataPath(?string $dataPath): ValidationErrorInterface
    {
        $this->parameters[self::DATA_PATH] = $dataPath;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->parameters[self::MESSAGE] ?? null;
    }

    /**
     * @param string $message
     * @return ValidationErrorInterface
     */
    public function setMessage(?string $message): ValidationErrorInterface
    {
        $this->parameters[self::MESSAGE] = $message;

        return $this;
    }
}
