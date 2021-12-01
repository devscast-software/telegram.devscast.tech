<?php

declare(strict_types=1);

namespace App\Service\Imap;

final class ImapMessageFormatter
{
    public function format(iterable $messages): array
    {
        $data = [];
        foreach ($messages as $message) {
            $body = $message->getBodyText() ?
                $message->getBodyText() :
                ($message->getBodyHtml() ? strip_tags($message->getBodyHtml()) : '⁉️ Message Vide');

            if (mb_strlen($body) > 200) {
                $space = strripos($body, " ", 0);
                $body = substr($body, 0, $space ? $space : 200) . '...';
            }

            $data[] = <<< MESSAGE
📩 **{$message->getFrom()->getFullAddress()}**
**{$message->getSubject()}**

{$body}

📬 **{$message->getTo()[0]->getFullAddress()}**
📪 **{$message->getDate()->format('d M Y H:i')}**
MESSAGE;
        }

        return $data;
    }
}
