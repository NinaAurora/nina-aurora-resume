<?php

namespace App\Models;


class LanguagesModel 
{
    public function getLanguages()
    {

        return [
            "ninalanguages" => [

                [
                    "label" => "Dutch",
                    "value" => "Native"
                ],

                [
                    "label" => "English",
                    "value" => "Fluent"
                ],

                [
                "label" => "German",
                "value" => "Native"
                ],

                [
                "label" => "French",
                "value" => "Elementary"
                ],


                [
                "label" => "Japanese",
                "value" => "Elementary"
                ],
            
            ]     
        ]; 
            
    }

}