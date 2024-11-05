<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\Auth;


class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function login()
    {
        return view('admin');
        // admin
    }
    public function confirm(AuthRequest $request)
    {
        $auth = $request->only(['name', 'email', 'password']);
        return view('register', ['auth' => $auth]);
    }

    public function store(AuthRequest $request)
    {
        $auth = $request->only(['name', 'email', 'password']);
        Auth::create($auth);

        return view('login');

    }

}