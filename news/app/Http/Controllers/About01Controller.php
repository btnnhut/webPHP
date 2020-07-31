<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About01Controller extends Controller
{
    //
	public function about(){
		// return View('about',['first_name'=>'Nhut','last_name'=>'Nguyen']);

		$first_name="Nhut";
		$last_name="Nguyen";
		return View('front.layout.masterView',compact('first_name','last_name'));
	}
}
