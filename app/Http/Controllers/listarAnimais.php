<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//PascalCase
class listarAnimais extends Controller
{
    //cameCase
    function listarAnimais(){
        return View("ListarAnimais");
    }
}


