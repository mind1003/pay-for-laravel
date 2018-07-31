<?php
namespace Tavey\Pay\Facades;

use Illuminate\Support\Facades\Facade;

class PayTest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'paytest';
    }
}