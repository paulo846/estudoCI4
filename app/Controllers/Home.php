<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function sobre(){
        echo "Fiquei quase o dia todo nessa imagem";
    }

    public function wa(){
        echo "Rota WA";
    }
}
