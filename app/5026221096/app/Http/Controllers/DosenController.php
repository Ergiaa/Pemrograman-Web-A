<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
    	return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h2>";
    }

    public function blog(){
        return view('blog');
    }
}
