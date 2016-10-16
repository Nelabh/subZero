<?php

namespace App\Http\Controllers;
use Auth;
use Redirect;
use App\User;
use Hash;
use App\UserDetail;
use Illuminate\Support\Facades\Input;
use Validator;
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
	public function signup(){
		$data = Input::all();
		$user = new User;
		$user->email = $data['email'];
		$user->name = $data['name'];
		$user->password = $data['password'];
		$user->level = 0;
		$user->gender = $data['gender'];
		$user->contact = $data['contact'];
		$user->eval = false;
		$user->marks = 0;
		$user->save();

	}
	public function login(){
		$data =array('email'=> Input::get('email'),'password'=>Input::get('password'));
		$user = User::where('email',$data['email'])->first();
		return json_encode($user);
	}
	
}
