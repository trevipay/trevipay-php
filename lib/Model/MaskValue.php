<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model;

class MaskValue
{
    public const ALL_MASK_KEYS = [
        'seller_id',
        'customer_id',
        'buyer_id',
        'id',
        'webhook_auth_token',
        'client_reference_id',
    ];

    private const API_PATH_BUYERS = 'buyers';

    private const API_PATH_CHARGES = 'charges';

    private const API_PATH_AUTHORIZATIONS = 'authorizations';

    private const API_PATH_WEBHOOKS = 'webhooks';

    private const API_PATH_REFUNDS = 'refunds';

    /**
     * The following values will be masked in all requests and responses when stored in the debug log
     */
    private const DATA_TO_BE_MASKED_FOR_DEBUG = [
        self::API_PATH_AUTHORIZATIONS => [
            'seller_id' => true,
            'customer_id' => true,
            'buyer_id' => true,
        ],
        self::API_PATH_CHARGES => [
            'seller_id' => true,
            'customer_id' => true,
            'buyer_id' => true,
        ],
        self::API_PATH_REFUNDS => [
            'seller_id' => true,
            'customer_id' => true,
            'buyer_id' => true,
        ],
        self::API_PATH_BUYERS => [
            'id' => true,
        ],
        self::API_PATH_WEBHOOKS => [
            'webhook_auth_token' => true,
        ],
    ];

    /**
     * @param string $value
     * @return string
     */
    public function mask(string $value): string
    {
        $length = strlen($value);
        if ($length > 8) {
            $length = 8;
        }

        return substr($value, 0, $length) . str_repeat('*', $length);
    }

    /**
     * @param array $data
     * @param string $methodName
     * @return array
     */
    public function maskValues(array $data, string $methodName): array
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = $this->maskValues($data[$key], $methodName);
            } else {
                if (isset(self::DATA_TO_BE_MASKED_FOR_DEBUG[$methodName][$key])) {
                    if ($key === 'webhook_auth_token') {
                        $data[$key] = 'Bearer ' . $this->mask(str_replace('Bearer ', '', $value));
                    } else {
                        $data[$key] = $this->mask($value);
                    }
                }
            }
        }

        return $data;
    }
}
