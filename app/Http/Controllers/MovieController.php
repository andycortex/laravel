<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
    	return "estoy en el index";
    }
    public function create(){
    	return "estoy en el formulario de crear";
    }
}
