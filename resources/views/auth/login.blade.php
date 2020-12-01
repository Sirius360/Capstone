@extends('layouts.app')
@section('content2')

<div class="col-lg-9 col-xl-8 text-center">
                            <h2>Welcome Back &#x1f44b;</h2>
                            <p class="lead">Log in to your account to continue</p>
                    </div>
 @endsection
@section('content')
<div class="container">

                    <form method="POST" action="{{ route('login') }}">
                        {{csrf_field()}}
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

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- Autosize - resizes textarea inputs as user types -->
    <script type="text/javascript" src="assets/js/autosize.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <!-- Prism - displays formatted code boxes -->
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <!-- Shopify Draggable - drag, drop and sort items on page -->
    <script type="text/javascript" src="assets/js/draggable.bundle.legacy.js"></script>
    <script type="text/javascript" src="assets/js/swap-animation.js"></script>
    <!-- Dropzone - drag and drop files onto the page for uploading -->
    <script type="text/javascript" src="assets/js/dropzone.min.js"></script>
    <!-- List.js - filter list elements -->
    <script type="text/javascript" src="assets/js/list.min.js"></script>

    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

@endsection
