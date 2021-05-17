<?php

namespace App\Models;

class BioModel 
{
    public function getBio()
    {

        return [
            "ninabio" => [

                [
                "label" => "Name",
                "value" => "Nina Aurora"
                ],


                [
                "label" => "DOB",
                "value" => "March 27th 1990"
                ],

                [
                "label" => "Location",
                "value" => "Groningen, NL"
                ],

                [
                "label" => "Likes",
                "value" => "Cats"
                ],

                [
                "label" => "Dislikes",
                "value" => "People that don't like cats"
                ],
               
            ]     
        ]; 
            
    }

}
