<?php

namespace App\Http\Controllers;
use App\Extra;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function index(){
    	$extras = Extra::all();
    	return view("extras", compact('extras'));
    }
}
