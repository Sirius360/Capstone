@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-lg-9 col-xl-8 text-center">
                <h2>Create Account &#x1F325;</h2>
                <p class="lead">Continue your journey with Capstone Tracking</p>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-7 col-sm-8">
                <div class="text-center mt-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <input class="form-control fs-0" type="text" id="name" placeholder="Full name" name="name" />
                        </div>

                        <div class="form-group">
                            <input class="form-control fs-0" type="email" id="email" placeholder="Email Address" name="email" />
                            <div class="text-left">
                                <small id="result"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control fs-0" type="password" id="password" placeholder="Password" name="password" />
                            <div class="text-left">
                                <small>Your password should be at least 8 characters</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control fs-0" type="password" id="password-confirm" placeholder="Confirm Password" name="password_confirmation" />
                            <div class="text-left">
                                <span></span>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <input class="form-control fs-0" type="text" id="last-name" placeholder="Last name" name="last-name" />
                        </div> -->
                        <button class="btn btn-lg btn-block btn-primary" role="button" type="submit" id="validate">
                        {{ __('Register') }}
                        </button>
                        <small>By clicking 'Create Account' you agree to our <a href="#">Terms of Use</a></small>
                        <div class="mt-2">
                            <a class="fs-0" href="{{URL::to('/login')}}"><span class="pallette-grey-4">&larr; Back to Login</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
