<?php

declare(strict_types=1);

namespace App\Command;

use App\Telegram\BotReply;
use App\Telegram\BotTrigger;

/**
 * class GetDevscastLatestPodcastCommand.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
final class GetDevscastLatestPodcastCommand extends AbstractCommand
{
    public const NAME = 'podcasts';

    public const RESTRICTED = false;

    public const TRIGGERS = [BotTrigger::CHAT, BotTrigger::CLI];

    public const REPLY_MODE = BotReply::CURRENT_CHAT;

    public const CLI_DEVSCAST_CHAT = 'devscast-community';
}
