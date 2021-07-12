<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Charge\CreateMethod;

use TreviPay\TreviPay\Api\Data\Charge\CreateMethod\CreateAChargeRequestInterface;
use TreviPay\TreviPay\Model\Data\Charge\ChargeResponse;

class CreateAChargeRequest extends ChargeResponse implements CreateAChargeRequestInterface
{
    private const AUTHORIZATION_ID = 'authorization_id';

    /**
     * @param string $authorizationId
     * @return CreateAChargeRequestInterface
     */
    public function setAuthorizationId(string $authorizationId): CreateAChargeRequestInterface
    {
        return $this->setData(self::AUTHORIZATION_ID, $authorizationId);
    }
}
