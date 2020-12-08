@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-7 col-sm-8">
            <div class="text-center">
                <h2>Welcome Back &#x1f44b;</h2>
                <p class="lead">Log in to your account to continue</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <input class="form-control fs-0" type="email" id="email" placeholder="Email" name="email" />
                    </div>
                    <div class="form-group">
                        <input class="form-control fs-0" type="password" id="password" placeholder="Password" name="password" />
                        <div class="text-right">
                            <a href="{{URL::to('/forgot')}}"><span class="pallette-grey-4">Forgot password?</span></a>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-block btn-primary" role="button" type="submit">
                        Log in
                    </button>
                    <div class="mt-2">
                        <span class="fs-0">Don't have an account yet? <a href="{{URL::to('/register')}}"   >Create one</a></span>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
