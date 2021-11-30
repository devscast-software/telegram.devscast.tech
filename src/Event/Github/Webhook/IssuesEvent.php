<?php

declare(strict_types=1);

namespace App\Event\Github\Webhook;

/**
 * Class IssuesEvent
 * @package App\Event\Github\Webhook
 * @author bernard-ng <bernard@devscast.tech>
 */
class IssuesEvent implements GithubWebhookEventInterface
{
    public function __construct(
        private string $guid,
        private array $playLoad,
        private string $name = "issues"
    ) {
    }

    /**
     * @return string
     * @author bernard-ng <bernard@devscast.tech>
     */
    public function getGuid(): string
    {
        return $this->guid;
    }

    /**
     * @return string
     * @author bernard-ng <bernard@devscast.tech>
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     * @author bernard-ng <bernard@devscast.tech>
     */
    public function getPlayLoad(): array
    {
        return $this->playLoad;
    }
}
