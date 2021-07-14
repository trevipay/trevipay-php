<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data;

use TreviPay\TreviPay\Api\Data\ErrorResponseInterface;
use TreviPay\TreviPay\Api\Data\ValidationErrorInterface;

class ErrorResponse implements ErrorResponseInterface
{
    private const CODE = 'code';

    private const MESSAGE = 'message';

    private const VALIDATION_ERRORS = 'validation_errors';

    /**
     * @var array
     */
    private $parameters = [];

    public function __construct(?string $code, ?string $message)
    {
        $this->parameters[self::CODE] = $code;
        $this->parameters[self::MESSAGE] = $message;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->parameters[self::CODE] ?? null;
    }

    /**
     * @param string $code
     * @return ErrorResponseInterface
     */
    public function setCode(string $code): ErrorResponseInterface
    {
        $this->parameters[self::CODE] = $code;

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
     * @return ErrorResponseInterface
     */
    public function setMessage(string $message): ErrorResponseInterface
    {
        $this->parameters[self::MESSAGE] = $message;

        return $this;
    }

    /**
     * @return ValidationErrorInterface[]|null
     */
    public function getValidationErrors(): ?array
    {
        return $this->parameters[self::VALIDATION_ERRORS] ?? null;
    }

    /**
     * @param ValidationErrorInterface[] $validationErrors
     * @return ErrorResponseInterface
     */
    public function setValidationErrors(array $validationErrors): ErrorResponseInterface
    {
        $this->parameters[self::VALIDATION_ERRORS] = $validationErrors;

        return $this;
    }

    /**
     * @param ValidationErrorInterface $validationError
     * @return ErrorResponseInterface
     */
    public function addValidationError(ValidationErrorInterface $validationError): ErrorResponseInterface
    {
        if (!isset($this->parameters[self::VALIDATION_ERRORS])) {
            $this->parameters[self::VALIDATION_ERRORS] = [];
        }
        $this->parameters[self::VALIDATION_ERRORS][] = $validationError;

        return $this;
    }
}
