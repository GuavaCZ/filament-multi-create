<?php

namespace Guava\FilamentMultiCreate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Guava\FilamentMultiCreate\FilamentMultiCreate
 */
class FilamentMultiCreate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Guava\FilamentMultiCreate\FilamentMultiCreate::class;
    }
}
