@extends('layouts.master')

@section('content')

<div class="main-container">

    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Faculties</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Faculty</li>
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
                            <th class="col-3 text-left">Faculty name</th>
                            <th class="col-5 text-left">Description</th>
                            <th class="col-3">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="d-flex">
                            <td class="col-1 text-truncate"><input type="checkbox"></td>
                            <td class="col-3 text-truncate text-left">International School</td>
                            <td class="col-5 text-truncate text-left">Mô tả khoa đào tạo quốc tế một vài dòng</td>
                            <td class="col-3 text-truncate"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1 text-truncate"><input type="checkbox"></td>
                            <td class="col-3 text-truncate text-left">International School</td>
                            <td class="col-5 text-truncate text-left">Mô tả khoa đào tạo quốc tế không bắt buộc</td>
                            <td class="col-3 text-truncate"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1 text-truncate"><input type="checkbox"></td>
                            <td class="col-3 text-truncate text-left">International School</td>
                            <td class="col-5 text-truncate text-left">Dòng này đảm bảo dài cực dài dài dài lắm luôn dài mà không thấy luôn á</td>
                            <td class="col-3 text-truncate"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1 text-truncate"><input type="checkbox"></td>
                            <td class="col-3 text-truncate text-left">International School</td>
                            <td class="col-5 text-truncate text-left">Mô tả khoa đào tạo quốc tế một vài dòng</td>
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

@endsection
@section('script')
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
