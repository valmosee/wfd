<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function home(){
        return view('home');
    }

    function katalog(){
        return view('katalog');
    }
}
