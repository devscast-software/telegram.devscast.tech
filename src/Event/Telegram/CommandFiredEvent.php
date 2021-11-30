<?php

declare(strict_types=1);

namespace App\Event\Telegram;

use TelegramBot\Api\Types\Message;

class CommandFiredEvent
{
    public function __construct(
        private Message $message,
        private string $command,
        private string $argument
    ) {
    }

    /**
     * @return Message
     * @author bernard-ng <bernard@devscast.tech>
     */
    public function getMessage(): Message
    {
        return $this->message;
    }

    /**
     * @return string
     * @author bernard-ng <bernard@devscast.tech>
     */
    public function getCommand(): string
    {
        return $this->command;
    }

    /**
     * @return string
     * @author bernard-ng <bernard@devscast.tech>
     */
    public function getArgument(): string
    {
        return $this->argument;
    }
}
