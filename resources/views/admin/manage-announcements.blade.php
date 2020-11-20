@extends('layouts.layouts')

@section('content')
<div class="main-container">
    
    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="index.html">Announcements</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Manage Announcement</li>
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
                        <th class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-0"><label class="custom-only custom-control-label" for="announcement-id-0"></label></div></th>
                        <th class="col-6">Title</th>
                        <th class="col-2">Privacy</th>
                        <th class="col-3">Action</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-1"><label class="custom-only custom-control-label" for="announcement-id-1"></label></div></td>
                            <td class="col-6 text-truncate text-left">Public là chế độ công khai, bao gồm cả khách (Guest)</td>
                            <td class="col-2 text-truncate"><img src="assets/img/mode/public.svg" alt="Public" width="16" /></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-2" ><label class="custom-only custom-control-label" for="announcement-id-2"></label></div></td>
                            <td class="col-6 text-truncate text-left">Members là chế độ cho người dùng đã active tài khoản</td>
                            <td class="col-2 text-truncate"><img src="assets/img/mode/members.svg" alt="Members" width="16" /></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-3" checked><label class="custom-only custom-control-label" for="announcement-id-3"></label></div></td>
                            <td class="col-6 text-truncate text-left">Only me là chỉ mình admin thấy được</td>
                            <td class="col-2 text-truncate"><img src="assets/img/mode/only-me.svg" alt="Only me" width="16"></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-4" ><label class="custom-only custom-control-label" for="announcement-id-4"></label></div></td>
                            <td class="col-6 text-truncate text-left">Thử độ dài của dòng này là bao nhiêu xem đã vừa vặn chưa nè, vẫn chưa đủ dài nên sẽ cố viết thêm một chút xíu nữa, chắc ok rồi đó</td>
                            <td class="col-2 text-truncate"><img src="assets/img/mode/public.svg" alt="Public" width="16"></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-5" ><label class="custom-only custom-control-label" for="announcement-id-5"></label></div></td>
                            <td class="col-6 text-truncate text-left">Public là chế độ công khai, bao gồm cả khách (Guest)</td>
                            <td class="col-2 text-truncate"><img src="assets/img/mode/public.svg" alt="Public" width="16" /></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-6" ><label class="custom-only custom-control-label" for="announcement-id-6"></label></div></td>
                            <td class="col-6 text-truncate text-left">Members là chế độ cho người dùng đã active tài khoản</td>
                            <td class="col-2 text-truncate"><img src="assets/img/mode/members.svg" alt="Members" width="16" /></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-7" ><label class="custom-only custom-control-label" for="announcement-id-7"></label></div></td>
                            <td class="col-6 text-truncate text-left">Only me là chỉ mình admin thấy được</td>
                            <td class="col-2 text-truncate"><img src="assets/img/mode/only-me.svg" alt="Only me" width="16"></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-8" ><label class="custom-only custom-control-label" for="announcement-id-8"></label></div></td>
                            <td class="col-6 text-truncate text-left test">Thử độ dài của dòng này là bao nhiêu xem đã vừa vặn chưa nè, vẫn chưa đủ dài nên sẽ cố viết thêm một chút xíu nữa, chắc ok rồi đó</td>
                            <td class="col-2 text-truncate"><img src="assets/img/mode/public.svg" alt="Public" width="16"></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-9" ><label class="custom-only custom-control-label" for="announcement-id-9"></label></div></td>
                            <td class="col-6 text-truncate text-left">Public là chế độ công khai, bao gồm cả khách (Guest)</td>
                            <td class="col-2 text-truncate"><img src="assets/img/mode/public.svg" alt="Public" width="16" /></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-10" ><label class="custom-only custom-control-label" for="announcement-id-10"></label></div></td>
                            <td class="col-6 text-truncate text-left">Members là chế độ cho người dùng đã active tài khoản</td>
                            <td class="col-2 text-truncate"><img src="assets/img/mode/members.svg" alt="Members" width="16" /></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-11" ><label class="custom-only custom-control-label" for="announcement-id-11"></label></div></td>
                            <td class="col-6 text-truncate text-left">Only me là chỉ mình admin thấy được</td>
                            <td class="col-2 text-truncate"><img src="assets/img/mode/only-me.svg" alt="Only me" width="16"></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-12" ><label class="custom-only custom-control-label" for="announcement-id-12"></label></div></td>
                            <td class="col-6 text-truncate text-left test">Thử độ dài của dòng này là bao nhiêu xem đã vừa vặn chưa nè, vẫn chưa đủ dài nên sẽ cố viết thêm một chút xíu nữa, chắc ok rồi đó</td>
                            <td class="col-2 text-truncate"><img src="assets/img/mode/public.svg" alt="Public" width="16"></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
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

<script>
$(document).ready(function(){
    $(".check").click(function(){
        $(".custom-control-input").prop("checked", true);
    });
    $(".uncheck").click(function(){
        $(".custom-control-input").prop("checked", false);
    });
});
</script>

@endsection
