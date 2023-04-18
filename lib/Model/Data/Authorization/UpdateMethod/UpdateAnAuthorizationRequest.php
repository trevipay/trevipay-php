<?php


namespace TreviPay\TreviPay\Model\Data\Authorization\UpdateMethod;

use TreviPay\TreviPay\Api\Data\Authorization\UpdateMethod\UpdateAnAuthorizationRequestInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class UpdateAnAuthorizationRequest extends RequestDataObject implements UpdateAnAuthorizationRequestInterface
{
    private const ID = 'id';

    private const PREAUTHORIZED_AMOUNT = 'authorized_amount';

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->getData(self::ID);
    }

    /**
     * @param string $id
     * @return UpdateAnAuthorizationRequestInterface
     */
    public function setId(string $id): UpdateAnAuthorizationRequestInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @return string|null
     */
    public function getAuthorizedAmount(): ?string
    {
        return $this->getData(self::PREAUTHORIZED_AMOUNT);
    }

    /**
     * @param int $authorizedAmount
     * @return UpdateAnAuthorizationRequestInterface
     */
    public function setAuthorizedAmount(int $authorizedAmount): UpdateAnAuthorizationRequestInterface
    {
        return $this->setData(self::PREAUTHORIZED_AMOUNT, $authorizedAmount);
    }
}
