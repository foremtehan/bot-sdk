<?php

namespace Telegram\Bot\Laravel\Facades;

use Telegram\Bot\Objects\Update;
use Telegram\Bot\Objects\Message;
use Illuminate\Support\Facades\Facade;
use Telegram\Bot\BotsManager;

/**
 * Class Telegram.
 *
 * @method static list<\Telegram\Bot\Api> getBots(string $name)
 * @method static \Telegram\Bot\Api bot(string|null $name)
 * @method static \Telegram\Bot\Api reconnect(string|null $name)
 * @method static \Telegram\Bot\BotsManager disconnect(string|null $name)
 * @method static string link(string $fileId)
 * @method static string download(string $fileId)
 * @method static Message toOwner(mixed $message, string $header = '', bool $preview = true)
 * @method static Update[] getUpdates(array $params = [], $shouldEmitEvents = true)
 *
 * @mixin \Telegram\Bot\BotsManager
 */
class Telegram extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BotsManager::class;
    }
}
