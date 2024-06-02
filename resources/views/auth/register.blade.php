@extends('layout')

@section('content')

    @section('content')

        <div id="log-in" class="site-form log-in-form">

            <div id="log-in-head">
                <h1>Register</h1>
            </div>

            <div class="form-output">

                <x-validation-errors></x-validation-errors>

                <form action="" method="POST">
                    @csrf
                    <div class="form-group label-floating">
                        <label class="control-label">Name</label>
                        <input class="form-control" name="name" placeholder="" type="text">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Email</label>
                        <input name="email" class="form-control" placeholder="" type="email">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Password</label>
                        <input name="password" class="form-control" placeholder="" type="password">
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label">Password Confirm</label>
                        <input name="password_confirmation" class="form-control" placeholder="" type="password">
                    </div>

                    <div class="remember">
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox">
                                Remember me
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-lg btn-primary full-width">Register</button>

                    <div class="or"></div>

                    <p>Already have an account? <a href=""> Login</a></p>
                </form>
            </div>
        </div>

    @endsection

@endsection
