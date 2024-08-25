<?php

declare(strict_types=1);

namespace Everully\LaravelWildberriesSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see WildberriesApiService
 */
class WildberriesFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return WildberriesApiService::class;
    }
}
