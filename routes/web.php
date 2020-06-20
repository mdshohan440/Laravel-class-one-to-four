<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('bladetest',function(){
		return view('home');
});

Route::get('frontside','FrontendContoller@index');
Route::get('frontside/contact','FrontendContoller@contact');

Route::get('user','UserController@userform')->name('user');
//login form for dashio template
Route::get('loginform','UserController@index')->name('loginform');
//Registration form for dashio template
Route::get('registration','UserController@registration')->name('registration');
//Registration data save form for dashio template
Route::POST('registrationsave','UserController@registrationsave')->name('registrationsave');

//Route::get('seveConsultation','UserController@seveConsultation')->name('seveConsultation');
Route::POST('seveConsultation','UserController@seveConsultation')->name('seveConsultation');
//login form for dashio template
Route::POST('checklogin','UserController@checklogin')->name('checklogin');

//dashboard for dashio template
Route::get('dashboard','DashboardController@index')->name('dashboard');

//Route::get('user/{id}','UserController@show')->where('id','[0-9]+');//numeric
Route::get('user/{id?}','UserController@show')->where('id','[0-9]+');//optional
Route ::get('user/{name}','UserController@display')->where('name','[a-z]+');
