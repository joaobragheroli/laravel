<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


   
//PascalCase
class registro extends Controller
{
    //cameCase
    function registro(){
        return View("registro");
    }

    function criarConta(Request $request){
        // dd($request->all());

        $usuario = new Usuario();
        $usuario->create($request->all());

        return view('registro');
        
    }
  
}


