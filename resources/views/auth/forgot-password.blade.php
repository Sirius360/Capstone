@extends('layouts.app')

@section('content2')

<div class="col-lg-9 col-xl-8 text-center">
<h2>Forgot password &#x1f62B;</h2>
 <p class="lead">Enter your email address to reset</p>
 </div>
 @endsection

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
