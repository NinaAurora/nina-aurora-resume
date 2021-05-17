<?php

namespace App\Http\Controllers;

use App\Libraries\View;

class HomeController {

    public function index()
    {
        return View::render('home.view', [
            'name' => 'Nina Aurora',
            'nog_een_array' => [
                'apple',
                'banana',
            ]
        ]);
    }
}