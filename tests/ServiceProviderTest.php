<?php
namespace Avido\LaravelCopernicaApi\Tests;

use Avido\LaravelCopernicaApi\Facades\Copernica;
use Avido\LaravelCopernicaApi\CopernicaApi;

class ServiceProviderTest extends TestCase
{
    /** @test */
    public function itCanResolveCopernicaApiClientClass()
    {
        $this->assertInstanceOf(CopernicaApi::class, app(CopernicaApi::class));
    }

    /** @test */
    public function itCanUseTheFacade()
    {
        $this->assertTrue(Copernica::registerd());
    }
}
