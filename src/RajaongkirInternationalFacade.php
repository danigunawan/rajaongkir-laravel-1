<?php

namespace Ncaneldiee\Rajaongkir\Laravel;

use Illuminate\Support\Facades\Facade;

class RajaongkirInternationalFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rajaongkir.international';
    }
}
