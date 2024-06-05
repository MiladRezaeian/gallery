<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\UserService;

class RegisterController extends Controller
{

    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        (new UserService)->register($request);

        return redirect()->intended()->with('alert', 'Registration successful! Welcome aboard.');
    }
}
