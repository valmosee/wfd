<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function home(Request $p){
        if(isset($p->param)){
            return view($p->param);
        }
        return view('home');
    }
}
