<?php

namespace rpsimao\Scaleway\Facade;

use Illuminate\Support\Facades\Facade;

class Scaleway extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'scaleway'; }
}