<?php
namespace Avido\LaravelCopernicaApi\Facades;

use Avido\LaravelCopernicaApi\CopernicaApi;
use Illuminate\Support\Facades\Facade;

class Copernica extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return CopernicaApi::class;
    }
}
