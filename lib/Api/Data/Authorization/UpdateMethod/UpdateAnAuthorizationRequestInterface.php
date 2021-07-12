<?php
declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Authorization\UpdateMethod;

interface UpdateAnAuthorizationRequestInterface
{
    /**
     * @return string|null
     */
    public function getId(): ?string;

    /**
     * @param string $id
     * @return UpdateAnAuthorizationRequestInterface
     */
    public function setId(string $id): UpdateAnAuthorizationRequestInterface;

    /**
     * @return string|null
     */
    public function getAuthorizedAmount(): ?string;

    /**
     * @param int $authorizedAmount
     * @return UpdateAnAuthorizationRequestInterface
     */
    public function setAuthorizedAmount(int $authorizedAmount): UpdateAnAuthorizationRequestInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
