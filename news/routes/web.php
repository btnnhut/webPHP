<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomePageController@index');
Route::get('/listing','ListingController@index');
Route::get('/details','DetailsController@index');
Route::get('/helloBTN', function () {
    return "Hello World";
});
Route::get('football', function () {
    return "I love football";
});
Route::get('/user/{id}', function ($id) {
    return "My id is ".$id;
});
Route::get('/number/{id}', function ($id) {
    return "I enter is ".$id;
})->where('id','[0-9]+');
Route::get('numberChar/{id}/{char?}', function ($id,$char="BTN") {
    return "I input is ".$id.". And my name ".$char;
})->where('id','[0-9]+');

Route::get('world','HelloController@FHello');
Route::get('add','AddController@index');
Route::view('/about','about');
Route::view('/contact01','contact');
Route::get('/about01',['uses'=>'AboutController@about','as'=>'about']);
Route::get('/about02',['uses'=>'About01Controller@about','as'=>'about']);
Route::group(['prefix'=>'back'],function(){
	Route::get('','Admin\DashboardController@index');
	Route::get('/category','Admin\CategoryController@index');
	Route::get('/category/create','Admin\CategoryController@create');
	Route::get('/category/edit','Admin\CategoryController@edit');
});