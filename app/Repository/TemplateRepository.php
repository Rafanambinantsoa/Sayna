<?php

namespace App\Repository ;

use App\Models\Template;
use App\Models\User;
use Faker\Factory as Faker;

class TemplateRepository {

    public static function generate($id , $user , $destination){

        $generator = Faker::create();
        $generator->seed($id);
        $template = new Template();
        $template->id = $id;
        $template->subject = $generator->randomLetter() ;
        $content = 
        "
        Your delivery to $destination->countryName,
        Hi $user->name,
        
        Thanks for contacting us to deliver to $destination->countryName
        
        Regards,
        
        SAYNA team
        ";
        
        $template->content = $content ;
        print($template->content);
    }
    
}
