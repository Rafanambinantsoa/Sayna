<?php

namespace App\Console\Commands;

use App\Repository\DestinationRepository;
use App\Repository\QuoteRepository;
use App\Repository\SiteRepository;
use App\Repository\TemplateRepository;
use App\Repository\UserRepository;
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
        $userId = mt_rand(0 , 100) ; 
        $destinationId = mt_rand(0 , 100) ; 
        $siteId = mt_rand(0 , 100) ; 
        
        
        SiteRepository::generate( $siteId);
        QuoteRepository::generate( mt_rand(0 , 100) ,  $siteId , $destinationId);

        TemplateRepository::generate( mt_rand(0 , 100) , UserRepository::generate($userId) , DestinationRepository::generate($destinationId) );
        // $this->info('Ma commande a été exécutée avec succès.');
    }
}
