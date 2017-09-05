<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class koneksicontroller extends Controller
{
    public function index(){
        $view = DB::table('testing')->get();
        return view('hello')
        ->with('view', $view);
    }
    //
}
