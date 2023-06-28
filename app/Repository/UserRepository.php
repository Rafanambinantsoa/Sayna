<?php

namespace App\Repository ;

use App\Models\User;
use Faker\Factory as Faker;

class UserRepository {

    public static function generate($id){

        $generator = Faker::create();
        $generator->seed($id);
        $user = new User();
        $user->id = $id;
        $user->name = $generator->name() ;
        $user->firstname   = $generator->name() ;
        $user->email = $generator->email() ;
        return($user);
    }

}

