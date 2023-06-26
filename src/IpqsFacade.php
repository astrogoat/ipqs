<?php

namespace Astrogoat\Ipqs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Ipqs\Ipqs
 */
class IpqsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ipqs';
    }
}
