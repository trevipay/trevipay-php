<?php


namespace TreviPay\TreviPay\Api\Data;

interface ValidationErrorInterface
{
    /**
     * @return string|null
     */
    public function getDataPath(): ?string;

    /**
     * @param string $dataPath
     * @return ValidationErrorInterface
     */
    public function setDataPath(?string $dataPath): ValidationErrorInterface;

    /**
     * @return string|null
     */
    public function getMessage(): ?string;

    /**
     * @param string $message
     * @return ValidationErrorInterface
     */
    public function setMessage(?string $message): ValidationErrorInterface;
}
