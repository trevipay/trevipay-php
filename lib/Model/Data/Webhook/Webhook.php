<?php
declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Webhook;

use TreviPay\TreviPay\Api\Data\Webhook\WebhookInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class Webhook extends RequestDataObject implements WebhookInterface, \JsonSerializable
{
    private const ID = 'id';
    private const WEBHOOK_URL = 'webhook_url';
    private const WEBHOOK_AUTH_TOKEN = 'webhook_auth_token';
    private const WEBHOOK_AUTH_TOKEN_HEADER = 'webhook_auth_token_header';
    private const EVENT_TYPES = 'event_types';
    private const CREATED = 'created';
    private const MODIFIED = 'modified';

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->getData(self::ID);
    }

    /**
     * @param string $id
     * @return WebhookInterface
     */
    public function setId(string $id): WebhookInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->getData(self::WEBHOOK_URL);
    }

    /**
     * @param string $webhookUrl
     * @return WebhookInterface
     */
    public function setUrl(string $webhookUrl): WebhookInterface
    {
        return $this->setData(self::WEBHOOK_URL, $webhookUrl);
    }

    /**
     * @return string|null
     */
    public function getAuthToken(): ?string
    {
        return $this->getData(self::WEBHOOK_AUTH_TOKEN);
    }

    /**
     * @param string $webhookAuthToken
     * @return WebhookInterface
     */
    public function setAuthToken(string $webhookAuthToken): WebhookInterface
    {
        return $this->setData(self::WEBHOOK_AUTH_TOKEN, $webhookAuthToken);
    }

    /**
     * @return string|null
     */
    public function getAuthTokenHeader(): ?string
    {
        return $this->getData(self::WEBHOOK_AUTH_TOKEN_HEADER);
    }

    /**
     * @param string $webhookAuthTokenHeader
     * @return WebhookInterface
     */
    public function setAuthTokenHeader(string $webhookAuthTokenHeader): WebhookInterface
    {
        return $this->setData(self::WEBHOOK_AUTH_TOKEN_HEADER, $webhookAuthTokenHeader);
    }

    /**
     * @return array|null
     */
    public function getEventTypes(): ?array
    {
        return $this->getData(self::EVENT_TYPES);
    }

    /**
     * @param array $eventTypes
     * @return WebhookInterface
     */
    public function setEventTypes(array $eventTypes): WebhookInterface
    {
        return $this->setData(self::EVENT_TYPES, $eventTypes);
    }

    /**
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->getData(self::CREATED);
    }

    /**
     * @param string $created
     * @return WebhookInterface
     */
    public function setCreated(string $created): WebhookInterface
    {
        return $this->setData(self::CREATED, $created);
    }

    /**
     * @return string|null
     */
    public function getModified(): ?string
    {
        return $this->getData(self::MODIFIED);
    }

    /**
     * @param string $modified
     * @return WebhookInterface
     */
    public function setModified(string $modified): WebhookInterface
    {
        return $this->setData(self::MODIFIED, $modified);
    }
}
