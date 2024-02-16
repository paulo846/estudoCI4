<?php

namespace App\Controllers;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function sobre($name = null){
        if($name){
            echo "<h1>Olá ". $name . "</h1>";
        }else{
            phpinfo();
        }
    }

    public function wa(){
        echo "Rota WA";
    }
}