<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class showControllers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showControllers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this is the command that will show all the controller in the list';

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
     * @return int
     */
    public function handle()
    {
        echo "Show All Controllers";
    }
}
