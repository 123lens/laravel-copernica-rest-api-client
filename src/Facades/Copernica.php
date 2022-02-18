<?php
namespace Budgetlens\LaravelCopernicaApi\Facades;

use Budgetlens\LaravelCopernicaApi\CopernicaApi;
use Illuminate\Support\Facades\Facade;

class Copernica extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return CopernicaApi::class;
    }
}
