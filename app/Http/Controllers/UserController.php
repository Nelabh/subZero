<?php

namespace App\Http\Controllers;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller as BaseController;
class UserController extends BaseController
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function dashboard(){
		return Auth::user();
	}

}

