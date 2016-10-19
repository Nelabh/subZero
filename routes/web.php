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
Route::resource('user', 'UserController');
Route::resource('question', 'QuestionController');
Route::resource('useranswer', 'UserAnswerController');

Route::resource('testconfiguration', 'TestConfigurationController',['only' => [
    'index', 'update'
]]);

Route::get('checkemail',['as'=>'checkemail','uses'=>'UserController@checkemail']);
Route::get('randomquestions',['as'=>'randomquestions','uses'=>'QuestionController@randomquestions']);
Route::get('groupbyuser/{id}',['as'=>'groupbyuser','uses'=>'UserAnswerController@groupbyuser']);
Route::post('evaluate',['as'=>'evaluate','uses'=>'UserController@evaluate']);
