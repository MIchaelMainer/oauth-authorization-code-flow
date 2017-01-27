<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DataController extends Controller 
{
	public function showUserInfo()
	{
		return view('data', array('accessToken' => session('access_token')));
	}

}
