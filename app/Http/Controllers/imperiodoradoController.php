<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imperiodoradoController extends Controller
{
    
    public function home(){
    	return view('home');
    }
    public function noticias(){
    	return view('noticias');
    }
    public function contacto(){
    	return view('contacto');
    }
    public function empresa(){
    	return view('empresa');
    }
}
