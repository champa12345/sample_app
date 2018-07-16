<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	return view ('home');
    }
    public function about(){
    	return view('about');
    }
     public function contact(){
    	return view('tickets.create');
        
    }
     public function post(){
        return view('posts.create');
        
    }
    public function mail(){
    	return view('mail');
    }
}
