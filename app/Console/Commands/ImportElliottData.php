<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportElliottData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-elliott-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Elliott data from dav-mysql-1';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // use: php artisan app:import-elliott-data
        $this->info('This is an informational message in the terminal.');
    }
}
