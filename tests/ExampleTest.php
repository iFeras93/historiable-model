<?php

namespace Iferas93\HistoriableModel\Tests;

use Iferas93\HistoriableModel\HistoriableModelServiceProvider;
use Orchestra\Testbench\TestCase;

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
