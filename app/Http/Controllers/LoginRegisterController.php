<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    function login(){
        return view('auth.login');
    }
    public function register() {
        return view('auth.register');
    }

}
