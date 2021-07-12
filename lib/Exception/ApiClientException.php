<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Exception;

use Exception;
use TreviPay\TreviPay\Api\Data\ErrorResponseInterface;

class ApiClientException extends Exception
{
    /**
     * @var ErrorResponseInterface|null
     */
    private $errorResponse;

    public function __construct(
        string $message,
        ?ErrorResponseInterface $errorResponse = null,
        ?Exception $previous = null,
        int $code = 0
    ) {
        parent::__construct($message, $code, $previous);
        $this->errorResponse = $errorResponse;
    }

    public function getErrorResponse(): ?ErrorResponseInterface
    {
        return $this->errorResponse;
    }
}
