<?php

namespace Voorhof\Flash\Facades;

use Illuminate\Support\Facades\Facade;
use Voorhof\Flash\FlashService;

/**
 * @method static void success(string $message)
 * @method static void warning(string $message)
 * @method static void danger(string $message)
 * @method static void info(string $message)
 * @method static void flash(string $message, string $level = 'info')
 *
 * @see \Voorhof\Flash\FlashService
 */
class Flash extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return FlashService::class;
    }
}
