<?php

namespace Voorhof\Flash\Facades;

use Illuminate\Support\Facades\Facade;
use Voorhof\Flash\FlashService;

/**
 * @method static void primary(string $message)
 * @method static void secondary(string $message)
 * @method static void success(string $message)
 * @method static void warning(string $message)
 * @method static void danger(string $message)
 * @method static void info(string $message)
 * @method static void light(string $message)
 * @method static void dark(string $message)
 * @method static void flash(string $message, string $level = 'info')
 *
 * @see FlashService
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
