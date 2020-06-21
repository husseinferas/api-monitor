<?php


namespace App\Channels;


use App\Interfaces\ChannelsInterface;

class TelegramChannel implements ChannelsInterface
{
    /**
     * @param string $message
     */
    public static function send(string $message)
    {
        shell_exec("curl -X POST \
             -H 'Content-Type: application/json' \
             -d '{\"chat_id\": \"-1001427566107\", \"text\": \"$message\", \"disable_notification\": true}' \
             https://api.telegram.org/bot1275220423:AAFbm0CsBG-vonM6IhdLTYZgjuGqBk8IG8k/sendMessage");
    }
}
