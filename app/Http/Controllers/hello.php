<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hello extends Controller
{
    public function show($name) {
    	return view('hello', array('name' =>$name));
    }
}
    //

