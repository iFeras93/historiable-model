<?php

namespace Iferas93\HistoriableModel\Tests;

use Orchestra\Testbench\TestCase;
use Iferas93\HistoriableModel\HistoriableModelServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [HistoriableModelServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
