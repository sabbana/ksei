<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class KseiListener extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kseiListener';

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
        set_time_limit (0);
        $port = config('ksei.outgoingPort');
        $sock = socket_create(AF_INET, SOCK_STREAM,SOL_TCP);
        if (!$sock) {
            $this->info('Unable create socket!');
        }
        $bind = socket_bind($sock,'0.0.0.0' , $port);
        if (!$bind) {
            $this->info('Unable binding 0.0.0.0 using pot '.$port.'!');
        }
        if (!socket_listen($sock,3)) {
            $this->info('Unable to setup socket listener');
        }
        if (!socket_set_option($sock, SOL_SOCKET, SO_REUSEADDR, 1)) {
            echo socket_strerror(socket_last_error($sock));
            exit;
        }
        $client = socket_accept($sock);
        while ($input = socket_read($client,2048)){
            $input = trim($input);
            echo "Message :\n".$input;
        }
    }
}
