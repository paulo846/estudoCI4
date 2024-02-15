<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function sobre(){
        echo "Agora ninguém me segura galera :D";
    }

    public function wa(){
        echo "Rota WA";
    }
}
