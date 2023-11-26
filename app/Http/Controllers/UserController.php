<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
	public function index()
	{
		return view('pages.index');
	}
	
	public function loginp()
	{
		return view('pages.loginpacient');
	}
	
	public function registerp()
	{
		return view('pages.registerpacient');
	}
	
	public function loginl()
	{
		return view('pages.loginlekar');
	}
	
	public function registerl()
	{
		return view('pages.registerlekar');
	}
}
