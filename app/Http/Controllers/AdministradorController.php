<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    //
    public function viewHome(){
        return view("admin.home.view");
    }
}
