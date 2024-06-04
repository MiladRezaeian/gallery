<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Services\Auth\RegisterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        (new RegisterService)->register($request);

        return redirect()->intended()->with('alert', 'Registration successful! Welcome aboard.');
    }
}
