@extends('layouts.app')

@section('content')
                            <form  method="POST" action="{{ route('register') }}" >
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

    <script>
        function validateEmail(email) {
            const re = /^[a-zA-Z0-9]+@((dtu|duytan)\.edu\.vn)$/;
            return re.test(email);
        }

        function validate() {
            const $result = $("#result");
            const email = $("#email").val();
            $result.text("");

            if (validateEmail(email)) {
                $result.text(email + " is valid");
                $result.css("color", "green");
            } else {
                $result.text(email + " is not valid");
                $result.css("color", "#ad4105");
            }
            return false;
        }

        $("#validate").on("click", validate);

    </script>
@endsection
