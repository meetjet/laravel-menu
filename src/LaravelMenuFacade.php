<?php

namespace Meetjet\LaravelMenu;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Meetjet\LaravelMenu\LaravelMenu
 */
class LaravelMenuFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-menu';
    }
}
