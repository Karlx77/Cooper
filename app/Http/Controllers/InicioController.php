<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    public function articulos(){
        return view('articulosInteresantes');
    }
}
