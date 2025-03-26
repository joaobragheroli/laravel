<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


   
//PascalCase
class registro extends Controller
{
    //cameCase
    function registro(){
        return View("registro");
    }

    function criarConta(Request $request){
        dd($request->all());
    }
}


