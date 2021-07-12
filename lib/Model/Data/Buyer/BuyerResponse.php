<?php
declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Buyer;

use TreviPay\TreviPay\Api\Data\Buyer\BuyerResponseInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class BuyerResponse extends RequestDataObject implements BuyerResponseInterface
{
    private const ID = 'id';

    private const BUSINESS_NAME = 'business_name';

    private const CLIENT_REFERENCE_ID = 'client_reference_id';

    private const STATUS = 'status';

    private const CURRENCY = 'currency';

    private const REFUND_APPROVED = 'refund_approved';

    private const REFUND_BALANCE = 'refund_balance';

    private const REFUND_PREAUTHORIZED = 'refund_authorized';

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->getData(self::ID);
    }

    /**
     * @param string $id
     * @return BuyerResponseInterface
     */
    public function setId(string $id): BuyerResponseInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @return string|null
     */
    public function getBusinessName(): ?string
    {
        return $this->getData(self::BUSINESS_NAME);
    }

    /**
     * @param string $businessName
     * @return BuyerResponseInterface
     */
    public function setBusinessName(string $businessName): BuyerResponseInterface
    {
        return $this->setData(self::BUSINESS_NAME, $businessName);
    }

    /**
     * @return string|null
     */
    public function getClientReferenceId(): ?string
    {
        return $this->getData(self::CLIENT_REFERENCE_ID);
    }

    /**
     * @param string $clientReferenceId
     * @return BuyerResponseInterface
     */
    public function setClientReferenceId(string $clientReferenceId): BuyerResponseInterface
    {
        return $this->setData(self::CLIENT_REFERENCE_ID, $clientReferenceId);
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @param string $status
     * @return BuyerResponseInterface
     */
    public function setStatus(string $status): BuyerResponseInterface
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * @return array|null
     */
    public function getCurrency(): ?array
    {
        return $this->getData(self::CURRENCY);
    }

    /**
     * @param array $currency
     * @return BuyerResponseInterface
     */
    public function setCurrency(array $currency): BuyerResponseInterface
    {
        return $this->setData(self::CURRENCY, $currency);
    }

    /**
     * @return int|null
     */
    public function getCreditApproved(): ?int
    {
        return $this->getData(self::REFUND_APPROVED);
    }

    /**
     * @param int $creditApproved
     * @return BuyerResponseInterface
     */
    public function setCreditApproved(int $creditApproved): BuyerResponseInterface
    {
        return $this->setData(self::REFUND_APPROVED, $creditApproved);
    }

    /**
     * @return int|null
     */
    public function getCreditBalance(): ?int
    {
        return $this->getData(self::REFUND_BALANCE);
    }

    /**
     * @param int $creditBalance
     * @return BuyerResponseInterface
     */
    public function setCreditBalance(int $creditBalance): BuyerResponseInterface
    {
        return $this->setData(self::REFUND_BALANCE, $creditBalance);
    }

    /**
     * @return int|null
     */
    public function getCreditAuthorized(): ?int
    {
        return $this->getData(self::REFUND_PREAUTHORIZED);
    }

    /**
     * @param int $creditAuthorized
     * @return BuyerResponseInterface
     */
    public function setCreditAuthorized(int $creditAuthorized): BuyerResponseInterface
    {
        return $this->setData(self::REFUND_PREAUTHORIZED, $creditAuthorized);
    }
}
