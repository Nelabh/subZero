<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',array('as'=>'home','uses'=>'PagesController@root'));
Route::get('signup',array('as'=>'signup','uses'=>'PagesController@signupform'));
Route::get('login',array('as'=>'login','uses'=>'PagesController@loginform'));



