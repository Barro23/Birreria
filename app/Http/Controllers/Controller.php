<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function viewHome(){
        return view("home.view");
    }
    public function viewBirre(){
        return view("user.produtos");
    }
    public function viewLogin(){
        return view("usuarios.loginUser.view");
    }
    public function viewCadastrar(){
        return view("usuarios.cadastrarUser.verificarEmail");
    }
    
}
