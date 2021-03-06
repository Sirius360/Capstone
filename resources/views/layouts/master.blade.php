<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content=" csrf_token() ">

    <title>@yield('title', 'Capstone Tracking')</title>
    <link href="{{asset('assets/img/DTU.ico')}}" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/css/datatables.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/css/dataTables.checkboxes.css')}}" rel="stylesheet" type="text/css" media="all" />
    @yield('css')

</head>

<body>

    <div class="layout layout-nav-side">
        <!-- navbar here -->
        @include('components.navbar')

        <div class="main-container">
            @yield('content')
        </div>

        <div class="copyright text-right">
            <small>Copyright 2020 © Capstone Tracking. All Right Reserved. Powered by QL3T Team</small>
        </div>

    </div>

    @include('sweetalert::alert')

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- Autosize - resizes textarea inputs as user types -->
    <script type="text/javascript" src="{{asset('assets/js/autosize.min.js')}}"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="{{asset('assets/js/flatpickr.min.js')}}"></script>
    <!-- Prism - displays formatted code boxes -->
    <script type="text/javascript" src="{{asset('assets/js/prism.js')}}"></script>
    <!-- Shopify Draggable - drag, drop and sort items on page -->
    <script type="text/javascript" src="{{asset('assets/js/draggable.bundle.legacy.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/swap-animation.js')}}"></script>
    <!-- Dropzone - drag and drop files onto the page for uploading -->
    <script type="text/javascript" src="{{asset('assets/js/dropzone.min.js')}}"></script>
    <!-- List.js - filter list elements -->
    <script type="text/javascript" src="{{asset('assets/js/list.min.js')}}"></script>
    <!-- DataTables.js - sort, seach, pagination -->
    <script type="text/javascript" src="{{asset('assets/js/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dataTables.checkboxes.min.js')}}"></script>

    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="{{asset('assets/js/theme.js')}}"></script>


    @yield('script')

</body>

</html>
