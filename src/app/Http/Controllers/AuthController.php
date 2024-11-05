<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    public function register()
    // register
    {
        return view('register');
    }

    public function login()
    {
        return view('/auth/login');
    }
}
