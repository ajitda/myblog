<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Profile;

class Report extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Can make a daily report';

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
        $count = Profile::count();
        $this->info($count.' Profile Created till');
    }
}
