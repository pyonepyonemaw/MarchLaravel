<?php

namespace App\Http\Controllers;

use App\Receipe;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    public function index(){
    	// $data = \App\Receipe::all();
    	$data = Receipe::all();
    	// dd($data);
    	return view("home",compact('data'));
    }
}
