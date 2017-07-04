<?php

namespace rpsimao\ScalewayRPS\Facade;

use Illuminate\Support\Facades\Facade;

class RPSScaleway extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'scaleway'; }
}