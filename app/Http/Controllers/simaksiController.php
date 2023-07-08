<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class simaksiController extends Controller
{
    public function index(){
        return view ('master.index');
    }
    
    public function welcome(){
        return view ('main.welcome');
    }
}
