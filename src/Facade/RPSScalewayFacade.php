<?php

namespace rpsimao\RPSScaleway\Facade;

use Illuminate\Support\Facades\Facade;

class RPSScalewayFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'Scaleway'; }
}