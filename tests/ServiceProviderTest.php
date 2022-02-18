<?php
namespace Budgetlens\LaravelCopernicaApi\Tests;

use Budgetlens\LaravelCopernicaApi\Facades\Copernica;
use Budgetlens\LaravelCopernicaApi\CopernicaApi;

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
