<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class animal extends Controller
{
    //cameCase
    function registroAnimal(){
        return View("registro");
    }

    function criarContaAnimal(Request $request){
        // dd($request->all());

        $usuario = new Usuario();
        $usuario->create($request->all());

        return view('login');
        
    }
}
