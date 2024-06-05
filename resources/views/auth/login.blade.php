@extends('layouts.layout')

@section('content')

    <div id="log-in" class="site-form log-in-form">

        <div id="log-in-head">
            <h1>Login</h1>
        </div>

        <div class="form-output">

            <x-validation-errors></x-validation-errors>

            <form action="{{ route('login.authenticate') }}" method="post">
                @csrf
                <div class="form-group label-floating">
                    <label class="control-label">Email</label>
                    <input class="form-control" name="email" placeholder="" type="email">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Password</label>
                    <input class="form-control" placeholder="" name="password" type="password">
                </div>

                <div class="remember">
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox">
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="forgot">Forgot password</a>
                </div>

                <button class="btn btn-lg btn-primary full-width">Login</button>

                <p>Don't Have an Account? <a href="">Register</a></p>
            </form>
        </div>
    </div>

@endsection
