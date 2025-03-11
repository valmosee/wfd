<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\katalog;

class MyController extends Controller
{
    function home(){
        return view('home');
    }

    function katalog(){

        
        return view('katalog');
    }
}
