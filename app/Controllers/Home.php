<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function sobre($name){
        echo "Olá ". $name;
    }

    public function wa(){
        echo "Rota WA";
    }
}
