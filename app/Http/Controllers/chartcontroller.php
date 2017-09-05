<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class chartcontroller extends Controller
{
    public function getData(){
    $data = DB::table('chartsdata')->get();

    return view('chartsv2')->with('data', $data); 
    }
}
