<?php

namespace App\Repository ;

use App\Models\Site;
use Faker\Factory as Faker;

class SiteRepository {

    public static function generate($id){

        $generator = Faker::create();
        $generator->seed($id);
        $site = new Site();
        $site->id = $id;
        $site->url = $generator->url();
        return($site);
        // return new site($id , $generator->country() , 'en' , $generator->slug());
    }

}

