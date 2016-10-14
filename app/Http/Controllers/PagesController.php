<?php

namespace App\Http\Controllers;
use Auth;
use Redirect;
use Illuminate\Routing\Controller as BaseController;
class PagesController extends BaseController
{
	public function root(){
		if(!Auth::check()){
			return Redirect::route('login');
		}
		else{
			return Redirect::route('dashboard');
		}
	}
	public function loginform(){
		if(!Auth::check()){
			return view('login');
		}
		else{
			return Redirect::route('dashboard');
		}	
	}
	public function signupform(){
	if(!Auth::check()){
			return view('signup');
		}
		else{
			return Redirect::route('dashboard');
		}	
	}

}

