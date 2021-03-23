<?php

declare(strict_types=1);

namespace App\Event\Github\Webhook;

/**
 * Interface GithubWebhookEventInterface
 * @package App\Event\Github\Webhook
 * @author bernard-ng <ngandubernard@gmail.com>
 */
interface GithubWebhookEventInterface
{
    public function getGuid(): string;

    public function getName(): string;

    public function getPlayLoad(): array;
}