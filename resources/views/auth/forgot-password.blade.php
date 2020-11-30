@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-7">
                <div class="text-center">
                    <h2>Forgot password &#x1f62B;</h2>
                    <p class="lead">Enter your email address to reset</p>
                    <form>
                        <div class="form-group">
                            <input class="form-control fs-0" type="email" placeholder="Email Address" name="forgot-password-email" />
                        </div>
                        <button class="btn btn-lg btn-block btn-primary" role="button" type="submit">
                            Send reset link
                        </button>
                    </form>
                    <div class="mt-2">
                        <a class="fs-0" href="{{ url('/login') }}"><span class="pallette-grey-4">&larr; Back to Login</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
