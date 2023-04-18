<?php


namespace TreviPay\TreviPay\Api\Data\Webhook;

interface WebhookInterface
{
    /**
     * @return string|null
     */
    public function getId(): ?string;

    /**
     * @param string $id
     * @return WebhookInterface
     */
    public function setId(string $id): WebhookInterface;

    /**
     * @return string|null
     */
    public function getUrl(): ?string;

    /**
     * @param string $webhookUrl
     * @return WebhookInterface
     */
    public function setUrl(string $webhookUrl): WebhookInterface;

    /**
     * @return string|null
     */
    public function getAuthToken(): ?string;

    /**
     * @param string $webhookAuthToken
     * @return WebhookInterface
     */
    public function setAuthToken(string $webhookAuthToken): WebhookInterface;

    /**
     * @return string|null
     */
    public function getAuthTokenHeader(): ?string;

    /**
     * @param string $webhookAuthTokenHeader
     * @return WebhookInterface
     */
    public function setAuthTokenHeader(string $webhookAuthTokenHeader): WebhookInterface;

    /**
     * @return array|null
     */
    public function getEventTypes(): ?array;

    /**
     * @param array $eventTypes
     * @return WebhookInterface
     */
    public function setEventTypes(array $eventTypes): WebhookInterface;

    /**
     * @return string|null
     */
    public function getCreated(): ?string;

    /**
     * @param string $created
     * @return WebhookInterface
     */
    public function setCreated(string $created): WebhookInterface;

    /**
     * @return string|null
     */
    public function getModified(): ?string;

    /**
     * @param string $modified
     * @return WebhookInterface
     */
    public function setModified(string $modified): WebhookInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
