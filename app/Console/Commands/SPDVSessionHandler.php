<?php

namespace App\Console\Commands;

use App\Jobs\RenewSevenServiceSessionJob;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;

class SPDVSessionHandler extends Command
{
    Use DispatchesJobs;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SPDVSession:renew';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Handles Seven PDV Session';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->dispatch(new RenewSevenServiceSessionJob());
    }
}
