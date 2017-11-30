<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use DB;

class LikeController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

	public function store(Location $location){
		$location->likes()->toggle(auth()->id());

    	return back();
    }
}

