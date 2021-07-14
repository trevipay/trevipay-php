<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data;

interface ValidationErrorInterface
{
    /**
     * @return string|null
     */
    public function getKeyword(): ?string;

    /**
     * @param string $keyword
     * @return ValidationErrorInterface
     */
    public function setKeyword(string $keyword): ValidationErrorInterface;

    /**
     * @return string|null
     */
    public function getDataPath(): ?string;

    /**
     * @param string $dataPath
     * @return ValidationErrorInterface
     */
    public function setDataPath(string $dataPath): ValidationErrorInterface;

    /**
     * @return string|null
     */
    public function getSchemaPath(): ?string;

    /**
     * @param string $schemaPath
     * @return ValidationErrorInterface
     */
    public function setSchemaPath(string $schemaPath): ValidationErrorInterface;

    /**
     * @return array|null
     */
    public function getParams(): ?array;

    /**
     * @param array $params
     * @return ValidationErrorInterface
     */
    public function setParams(array $params): ValidationErrorInterface;

    /**
     * @return string|null
     */
    public function getMessage(): ?string;

    /**
     * @param string $message
     * @return ValidationErrorInterface
     */
    public function setMessage(string $message): ValidationErrorInterface;
}
