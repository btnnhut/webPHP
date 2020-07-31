<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
	public function about(){
		// return View('about',['first_name'=>'Nhut','last_name'=>'Nguyen']);

		$first_name="Nhut";
		$last_name="Nguyen";
		return View('about',compact('first_name','last_name'));
	}

}
