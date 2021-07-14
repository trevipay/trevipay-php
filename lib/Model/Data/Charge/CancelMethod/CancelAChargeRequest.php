<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Charge\CancelMethod;

use TreviPay\TreviPay\Api\Data\Charge\CancelMethod\CancelAChargeRequestInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class CancelAChargeRequest extends RequestDataObject implements CancelAChargeRequestInterface
{
    private const ID = 'id';

    private const REASON = 'reason';

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->getData(self::ID);
    }

    /**
     * @param string $id
     * @return CancelAChargeRequestInterface
     */
    public function setId(string $id): CancelAChargeRequestInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->getData(self::REASON);
    }

    /**
     * @param string $reason
     * @return CancelAChargeRequestInterface
     */
    public function setReason(string $reason): CancelAChargeRequestInterface
    {
        return $this->setData(self::REASON, $reason);
    }
}
