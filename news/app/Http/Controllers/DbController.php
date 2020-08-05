<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employee;

class DbController extends Controller
{
    //
    public function index(){
    	// $all=DB::table('employee')->select('name','age','city')->get();
    	// $all=DB::table('employee')->pluck('email','city');
    	// $single=DB::table('employee')->first();
    	// $order=DB::table('employee')->orderBy('id','DESC')->get();
    	// $limit=DB::table('employee')->orderBy('id','DESC')->limit(2)->get();
    	// $offset=DB::table('employee')->orderBy('salary','DESC')->offset(0)->limit(1)->get();
    	// $count=DB::table('employee')->count();
    	$min=DB::table('employee')->min('salary');
    	$max=DB::table('employee')->max('salary');
    	dd($max);
    }

    public function joining(){
    	$result=DB::table('order')
    		->join('user','user.id','=','order.user_id')
    		->select('user.name','order.id','order.amount','order.order_date')
    		->where('status',0)
    		->get();
    	dd($result);
    }

    public function model(){
    	$result=Employee::all();
    	dd($result);
    }
}
