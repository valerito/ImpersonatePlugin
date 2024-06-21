<?php

namespace Valerito\ImpersonatePlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Valerito\ImpersonatePlugin\ImpersonatePlugin
 */
class ImpersonatePlugin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Valerito\ImpersonatePlugin\ImpersonatePlugin::class;
    }
}
