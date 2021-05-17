<?php

namespace App\Models;

class SkillsModel 
{
    public function getSkills()
    {

        return [
            "ninaskills" => [

                [
                    "label" => "CSS",
                    "value" => '<i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star"></i>'
                ],

                [
                    "label" => "HTML",
                    "value" => '<i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-half"></i> <i class="bi bi-star"></i>'
                ],

                [
                "label" => "SEO",
                "value" => '<i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-half"></i> <i class="bi bi-star"></i>'
                ],

                [
                "label" => "Copywriting",
                "value" => '<i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star"></i>'
                ],


                [
                "label" => "Creating Problems",
                "value" => '<i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>'
                ],
               
            ]     
        ]; 
            
    }

}
