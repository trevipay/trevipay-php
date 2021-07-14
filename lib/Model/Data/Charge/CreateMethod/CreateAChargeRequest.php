<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Charge\CreateMethod;

use TreviPay\TreviPay\Api\Data\Charge\CreateMethod\CreateAChargeRequestInterface;
use TreviPay\TreviPay\Model\Data\Charge\ChargeResponse;

class CreateAChargeRequest extends ChargeResponse implements CreateAChargeRequestInterface
{
    private const PRE_AUTHORIZATION_ID = 'authorization_id';

    /**
     * @param string $preAuthorizationId
     * @return CreateAChargeRequestInterface
     */
    public function setAuthorizationId(string $preAuthorizationId): CreateAChargeRequestInterface
    {
        return $this->setData(self::PRE_AUTHORIZATION_ID, $preAuthorizationId);
    }
}
