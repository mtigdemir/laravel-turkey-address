<?php


namespace Mtigdemir\Address\Facades;


use Illuminate\Support\Facades\Facade;

class TRAddress extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'turkeyAddress';
    }
}