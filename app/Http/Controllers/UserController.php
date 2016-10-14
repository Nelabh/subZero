<?php

namespace App\Http\Controllers;
use Auth;
use Redirect;
use Illuminate\Routing\Controller as BaseController;
class UserController extends BaseController
{
	public function __construct()
	{
		$this->middleware('auth');
	}

}

