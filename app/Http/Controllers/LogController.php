<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests\loginRequest;
use Auth;
use Redirect;
use Session;

class LogController extends Controller
{
	public function store(loginRequest $request){
		return $request->email;
	}

}
 