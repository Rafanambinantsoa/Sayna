<?php

namespace App\Repository ;

use App\Models\Destination;
use Faker\Factory as Faker;

class DestinationRepository {

    public static function getById($id){

        $generator = Faker::create();
        $generator->seed($id);
        $destination = new Destination();
        $destination->id = $id;
        $destination->countryName = $generator->country() ;
        $destination->conjonction = "en" ;
        $destination->computerName = $generator->slug() ;
        print($destination);
        // return new Destination($id , $generator->country() , 'en' , $generator->slug());
    }

}
