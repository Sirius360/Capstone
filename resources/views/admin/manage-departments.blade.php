@extends('layouts.layouts')

@section('content')
<div class="main-container">

    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Departments</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Department</li>
            </ol>
        </nav>
    </div>
    <!-- end breadcrumb -->

    <!-- begin a container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="table-responsive mt-3"> 
                <table class="custom-table bg-purple">

                    <thead>
                        <tr class="d-flex">
                            <th class="col-1"><input type="checkbox"></th>          
                            <th class="col-4 text-left">Department name</th>
                            <th class="col-4 text-left">Faculty name</th>
                            <th class="col-3">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="d-flex">
                            <td class="col-1 text-truncate"><input type="checkbox"></td>
                            <td class="col-4 text-truncate text-left">CMU</td>
                            <td class="col-4 text-truncate text-left">International School</td>
                            <td class="col-3 text-truncate"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        
                    </tbody>

                </table>

                <div class="col-11 mt-3">
                    <ul class="list-inline custom-pointer">
                        <li><span class="badge badge-primary check"><i class="fad fa-check"></i>All</span></li>
                        <li><span class="badge badge-warning uncheck">None</span></li>
                        <li><span class="badge badge-danger"><i class="fad fa-times"></i>Delete</span></li>
                    </ul>
                </div>

            </div>
            <!-- end div table responsive -->
            <div class="scrollMore">
                Scroll More
            </div>
        </div>
        <!-- end div row -->
    </div>
    <!-- end div container -->
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


<script>
;(function($) {
$.fn.fixMe = function() {
    return this.each(function() {
        var $this = $(this),
            $t_fixed;
        function init() {
            $this.wrap('<div class="container" />');
            $t_fixed = $this.clone();
            $t_fixed.find("tbody").remove().end().addClass("fixed").insertAfter($this);
            resizeFixed();
        }
        function resizeFixed() {
            $t_fixed.find("th").each(function(index) {
            $(this).css("width",$this.find("th").eq(index).outerWidth()+"px");
            });
        }
        function scrollFixed() {
            var offset = $(this).scrollTop(),
            tableOffsetTop = $this.offset().top,
            tableOffsetBottom = tableOffsetTop + $this.height() - $this.find("thead").height();
            if(offset < tableOffsetTop || offset > tableOffsetBottom)
            $t_fixed.hide();
            else if(offset >= tableOffsetTop && offset <= tableOffsetBottom && $t_fixed.is(":hidden"))
            $t_fixed.show();
        }
        $(window).resize(resizeFixed);
        $(window).scroll(scrollFixed);
        init();
    });
};
})(jQuery);

$(document).ready(function(){
    $("table").fixMe();
    $(".up").click(function() {
        $('html, body').animate({
        scrollTop: 0
    }, 2000);
    });
});
</script>




@endsection
