<?php

namespace Fundamental\Epay\Facades;

use Illuminate\Support\Facades\Facade;

class Epay extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'epay';
    }
}