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
	public function loginForm(){
		if(!Auth::check()){
			return view('login');
		}
		else{
			return Redirect::route('dashboard');
		}	
	}
	public function signupForm(){
		if(!Auth::check()){
			return view('signup');
		}
		else{
			return Redirect::route('dashboard');
		}	
	}
	public function adminLoginForm(){
		if(!Auth::check()){
			return view('adminLogin');
		}
		else{
			return Redirect::route('dashboard');
		}
	}

}

