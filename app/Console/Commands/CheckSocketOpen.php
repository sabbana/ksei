<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\BufferedOutput;

class CheckSocketOpen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkSocketOpen';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        while(true) {
            $connection = @fsockopen(config('ksei.incomingIp'), config('ksei.incomingPort'));
            if (is_resource($connection)) {
                $this->info('Socket is listenig...');
            } else {
                $this->info('Socket is closed!');
                $this->info('Trying to establish connection with port: '.config('ksei.incomingPort'));
                $this->output = new BufferedOutput;
                $this->call('kseiListener');
                $this->output->fetch();
            }
        }
    }
}
