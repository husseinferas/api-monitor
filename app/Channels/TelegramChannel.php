<?php


namespace App\Channels;


use App\Interfaces\ChannelsInterface;
use TelegramBot\Api;

class TelegramChannel implements ChannelsInterface
{
    /**
     * @param string $message
     */
    public static function send(string $message)
    {
        $chat_id = env('TELEGRAM_CHAT');
        $token = env('TELEGRAM_TOKEN');
        $bot = new \TelegramBot\Api\BotApi($token);

        $bot->sendMessage($chat_id, $message, null, false, null, null, true);
    }
}
