@extends('layouts.app')

@section('content')

    <div class="container">
        <form>
            <div class="form-group">
                <input class="form-control fs-0" type="email" placeholder="Email Address" name="forgot-password-email" />
            </div>
            <button class="btn btn-lg btn-block btn-primary" role="button" type="submit">
                Send reset link
            </button>
        </form>
        <div class="mt-2">
            <a class="fs-0" href="{{URL::to('/login')}}"><span class="pallette-grey-4">&larr; Back to Login</span></a>
        </div>

    </div>

@endsection
