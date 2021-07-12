<?php
declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data;

use TreviPay\TreviPay\Api\Data\ValidationErrorInterface;

class ValidationError implements ValidationErrorInterface
{
    public const KEYWORD = 'Keyword';

    public const DATA_PATH = 'dataPath';

    public const SCHEMA_PATH = 'schemaPath';

    public const PARAMS = 'params';

    public const MESSAGE = 'message';

    /**
     * @var array
     */
    private $parameters = [];

    /**
     * @return string|null
     */
    public function getKeyword(): ?string
    {
        return $this->parameters[self::KEYWORD] ?? null;
    }

    /**
     * @param string $keyword
     * @return ValidationErrorInterface
     */
    public function setKeyword(string $keyword): ValidationErrorInterface
    {
        $this->parameters[self::KEYWORD] = $keyword;

        return $this;
    }

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
    public function setDataPath(string $dataPath): ValidationErrorInterface
    {
        $this->parameters[self::DATA_PATH] = $dataPath;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemaPath(): ?string
    {
        return $this->parameters[self::SCHEMA_PATH] ?? null;
    }

    /**
     * @param string $schemaPath
     * @return ValidationErrorInterface
     */
    public function setSchemaPath(string $schemaPath): ValidationErrorInterface
    {
        $this->parameters[self::SCHEMA_PATH] = $schemaPath;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getParams(): ?array
    {
        return $this->parameters[self::PARAMS] ?? null;
    }

    /**
     * @param array $params
     * @return ValidationErrorInterface
     */
    public function setParams(array $params): ValidationErrorInterface
    {
        $this->parameters[self::PARAMS] = $params;

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
    public function setMessage(string $message): ValidationErrorInterface
    {
        $this->parameters[self::MESSAGE] = $message;

        return $this;
    }
}
