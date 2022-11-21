<?php

namespace Sirbizz\SoftwareLab;

use Illuminate\Support\Facades\Facade;

class SoftwareLab extends Facade
{
    /**
     * Get the binding in the IoC container.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'software-lab';
    }
}