<?php

namespace Nicoaudy\Noty;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nicoaudy\Noty\Noty
 */
class NotyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'noty';
    }
}
