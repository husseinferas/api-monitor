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
        $chat_id = env('TELEGRAM_CHAT');
        $token = env('TELEGRAM_TOKEN');

        shell_exec("curl -X POST \
             -H 'Content-Type: application/json' \
             -d '{\"chat_id\": \"$chat_id\", \"text\": \"$message\", \"disable_notification\": true}' \
             https://api.telegram.org/bot$token/sendMessage");
    }
}
