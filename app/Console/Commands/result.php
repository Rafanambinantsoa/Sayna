<?php

namespace App\Console\Commands;

use App\Repository\DestinationRepository;
use Illuminate\Console\Command;

class result extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:result';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        DestinationRepository::getById(mt_rand(0 , 100));
        // $this->info('Ma commande a été exécutée avec succès.');
    }
}
