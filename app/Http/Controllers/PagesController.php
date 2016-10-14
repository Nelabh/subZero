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
		$rules = array(
			'email'=>'required|unique:users',
			'name'=>'required',
			'contact'=>'required',
			'password'=>'required|confirmed',
			'gender'=>'required'
			);
		$validator = Validator::make($data, $rules);
		if ($validator->fails()) {
    // send back to the page with the input data and errors
			return Redirect::route('signup')->withInput()->withErrors($validator->errors());
		}

		$user = new User;
		$user->email = $data['email'];
		$user->name = $data['name'];
		$user->password = Hash::make($data['password']);
		$user->level = 0;
		$user->save();
		$userDetails = new UserDetail;
		$userDetails->user_id = $user->id;
		$userDetails->gender = $data['gender'];
		$userDetails->contact = $data['contact'];
		$userDetails->eval = false;
		$userDetails->marks = 0;
		$userDetails->save();
		Auth::login($user);
		//return Redirect::route('dashboard');
		return "dashboard";
	}
	public function login(){
		$data =array('email'=> Input::get('email'),'password'=>Input::get('password'));
		$rules = array(
			'email'=>'required',
			'password'=>'required'
			);
		$validator = Validator::make($data, $rules);
		if ($validator->fails()) {
    // send back to the page with the input data and errors
			return Redirect::route('login')->withInput()->withErrors($validator->errors());
		}
		if(Auth::attempt($data)){
			return Redirect::route('dashboard');
		}
		else{
			return Redirect::route('login')->withInput()->with('message','Login Credentials Do not match');

		}

	}
	public function logout(){
		if(Auth::check())
		{
			Auth::logout();
			
			return Redirect::route('login')->with('message','Successfully Logged Out!'); 
		}
		else
		{
			return Redirect::route('login')->with('message','You need to login first!'); 
		}
	}
}
