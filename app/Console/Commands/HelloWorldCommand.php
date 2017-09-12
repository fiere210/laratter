<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelloWorldCommand extends Command
{
    /**
     * The name and signature of the console command.
     * The ? sign indicates opcional argument
     *
     * @var string
     */
    protected $signature = 'hello:world {argumento1? : Esto será devuelto por pantalla} {--algo : No tiene uso aún}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este es mi hola mundo de artisan';

    /**
     * Create a new command instance.
     *
     * @return void
     
    public function __construct()
    {
        parent::__construct();
    }*/

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $valor = $this->argument('argumento1');
        $this->line("Me enviaste el argumento: ".$valor);
        $this->info("Esto es información");

        if(true){
            $this->error("Algo ha fallado");
            return -1;
        }
    }
}
