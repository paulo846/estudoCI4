<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function sobre($name){
        echo "<h1>Olá ". $name . "</h1>";
    }

    public function wa(){
        echo "Rota WA";
    }
}
