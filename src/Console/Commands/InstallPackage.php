<?php

namespace Iferas93\HistoriableModel\Console\Commands;


use Illuminate\Console\Command;

class InstallPackage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'historiable:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'publish package assets';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Installing Historiable...');
        $this->info('Publishing configuration...');
        $this->call('vendor:publish', [
            '--provider' => "Iferas93\HistoriableModel\HistoriableModelServiceProvider",
            '--tag' => 'config',
        ]);

        $this->info('Publishing migrations...');
        $this->call('vendor:publish', [
            '--provider' => "Iferas93\HistoriableModel\HistoriableModelServiceProvider",
            '--tag' => 'migrations',
        ]);

        $this->info('Historiable has been Installed successfully');
    }
}
