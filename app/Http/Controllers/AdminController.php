<?php

namespace App\Http\Controllers;
use Auth;
use Redirect;
use Illuminate\Routing\Controller as BaseController;
class AdminController extends BaseController
{
	public function __construct()
	{
		$this->middleware('auth');
	}

}

