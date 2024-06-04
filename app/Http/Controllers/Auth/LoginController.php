<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\LoginService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function show()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request): RedirectResponse
    {
        (new LoginService)->authenticate($request);

        return redirect()->intended();
    }

    public function destroy(Request $request): RedirectResponse
    {
        (new LoginService)->destroy($request);

        return redirect()->back();
    }
}
