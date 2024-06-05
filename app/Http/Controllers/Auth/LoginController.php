<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function show()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request): RedirectResponse
    {
        (new UserService)->authenticate($request);

        return redirect()->intended();
    }

    public function destroy(Request $request): RedirectResponse
    {
        (new UserService)->destroy($request);

        return redirect()->back();
    }
}
