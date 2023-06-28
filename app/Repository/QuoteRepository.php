<?php

namespace App\Repository ;

use App\Models\Quote;
use Faker\Factory as Faker;

class QuoteRepository {

    public static function generate($id , $siteId , $destinationId){

        $generator = Faker::create();
        $generator->seed($id);
        $quote = new Quote();
        $quote->id = $id;
        $quote->siteId = $siteId;
        $quote->destinationId = $destinationId ;
        $quote->dateQuoted = today() ;
        return ($quote);
        // return new quote($id , $generator->country() , 'en' , $generator->slug());
    }

}

