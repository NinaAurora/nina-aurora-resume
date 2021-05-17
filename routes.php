<?php

$router->get('', 'app/Http/Controllers/HomeController.php@index');
$router->get('home', 'app/Http/Controllers/HomeController.php');
$router->get('resume', 'app/Http/Controllers/ResumeController.php@index');
// Alwin's suggestie:
// $router->post('mail_handler', 'app/Http/Controllers/mail_handler.php');

