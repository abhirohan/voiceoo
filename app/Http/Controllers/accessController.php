<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accessController extends Controller
{
    public function __construct(){
    	$this->middleware('guest');
    }

    public function registration(){
    	return view('access-register');
    }
    public function login(){
    	return view('access-login');
    }
}
