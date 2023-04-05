<?php


namespace TreviPay\TreviPay\Api\Data;

interface ErrorResponseInterface
{
    /**
     * @return string|null
     */
    public function getCode(): ?string;

    /**
     * @param string $code
     * @return ErrorResponseInterface
     */
    public function setCode(string $code): ErrorResponseInterface;

    /**
     * @return string|null
     */
    public function getMessage(): ?string;

    /**
     * @param string $message
     * @return ErrorResponseInterface
     */
    public function setMessage(string $message): ErrorResponseInterface;

    /**
     * @return ValidationErrorInterface[]|null
     */
    public function getValidationErrors(): ?array;

    /**
     * @param ValidationErrorInterface[] $validationErrors
     * @return ErrorResponseInterface
     */
    public function setValidationErrors(array $validationErrors): ErrorResponseInterface;
}
