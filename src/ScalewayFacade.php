<?php

namespace rpsimao\Scaleway;

use Illuminate\Support\Facades\Facade;

class ScalewayFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'rpsscaleway'; }
}