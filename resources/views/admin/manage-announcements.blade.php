@extends('layouts.master')

@section('content')
<div class="main-container">
    
    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Announcements</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Manage Announcement</li>
            </ol>
        </nav>
    </div>
    <!-- Thông báo -->
    <?php
         $message= Session ::get('message');
         if($message){
             echo '<span class="test-alert">'.$message.'</span>';
             Session::put('message',null);

            }
    ?>
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
                    @foreach($manage_announcements as $key => $cate_pro)

                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-9" ><label class="custom-only custom-control-label" for="announcement-id-9"></label></div></td>
                            <td class="col-6 text-truncate text-left">{{$cate_pro->title}}</td>
                            <td class="col-2 text-truncate">
                                <?php
                                if($cate_pro-> announcement_visibility==1){
                                    echo '<a href="#"><span class="fa fa-globe" aria-hidden="true" ></span></a>';
                                    // echo '<p>Public</p>';

                                    // <img src="{{ url('assets/img/mode/public.svg') }}" alt="Public" width="16" />;
                                }
                                else if($cate_pro-> announcement_visibility==2){
                                    echo '<a href="#"><span class="fa fa-users" aria-hidden="true" ></span></a>';
                                   // echo '<p>Members</p>';
                                }
                                else if($cate_pro-> announcement_visibility==3){
                                    echo '<a href="#"><span class="fa fa-lock-alt" aria-hidden="true" ></span></a>';
                                }
                                
                                ?>
                            </td>
                            <td class="col-3">
                            <a href="{{URL::to('/admin/edit-announcement/'.$cate_pro->id)}}"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;
                            <a onclick="return confirm('Are you sure to delete?')"href="{{URL::to('/admin/delete-announcement/'.$cate_pro->id)}}"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        
                        <!-- <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-10" ><label class="custom-only custom-control-label" for="announcement-id-10"></label></div></td>
                            <td class="col-6 text-truncate text-left">Members là chế độ cho người dùng đã active tài khoản</td>
                            <td class="col-2 text-truncate"><img src="{{ url('assets/img/mode/members.svg') }}" alt="Members" width="16" /></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-1"><div class="custom-control-inline-only custom-checkbox"><input type="checkbox" class="custom-control-input" id="announcement-id-11" ><label class="custom-only custom-control-label" for="announcement-id-11"></label></div></td>
                            <td class="col-6 text-truncate text-left">Only me là chỉ mình admin thấy được</td>
                            <td class="col-2 text-truncate"><img src="{{ url('assets/img/mode/only-me.svg') }}"alt="Only me" width="16"></td>
                            <td class="col-3"><a href="#"><span class="text-primary"><i class="fad fa-pencil"></i></span></a>&ensp;<a href="#"><span class="text-danger"><i class="fad fa-trash-alt"></i></span></a></td>
                        </tr> -->

                        
                    @endforeach
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
