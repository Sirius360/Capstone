<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content=" csrf_token() ">

    <title>Title</title>
    <link href="assets/img/DTU.ico" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>

    <div class="layout layout-nav-side">
        <div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
    
            <a class="navbar-brand" href="admin">
                <img alt="dtu" src="assets/img/duytan-university.svg" />
            </a>
            <div class="d-flex align-items-center">
        
                <!-- Already Logged in -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-block d-lg-none ml-2">
                    <div class="dropdown">
                        <a href="admin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img alt="Image" src="assets/img/avatar-man.png" class="avatar" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right text-center">
                            <a href="{{URL::to('/account-settings')}}"class="dropdown-item">Profile</a>
                            <a href="{{URL::to('/control-panel')}}"class="dropdown-item">Control Panel</a>
                            <a href="{{URL::to('/portal')}}"class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
                <!-- Already Logged in -->
        
                <!-- For guest only -->
                <!-- <div class="d-block d-lg-none">
                    <a href="login.html"><button type="button" class="btn btn-outline-warning">Login</button></a>
                </div>
        
                <div class="d-block d-lg-none mx-2">
                    <a href="register.html"><button type="button" class="btn btn-outline-info">Register</button></a>
                </div>
        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <!-- For guest only -->
            </div>
            
            <!-- remove -notimportant to show navbar selected and close others, current using auto collapse in custom.css -->
            <div class="collapse navbar-collapse flex-column" id="navbar-collapse-notimportant"> 
                <ul class="navbar-nav d-lg-block">
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">Thông báo</a>
                        <div id="submenu-1" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/new-announcement')}}">Tạo Thông báo</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/manage-announcements')}}">Quản lí Thông báo</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">Nhóm</a>
                        <div id="submenu-2" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/new-group')}}">Tạo Nhóm</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/manage-groups')}}">Quản lí Nhóm</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">Đề tài</a>
                        <div id="submenu-3" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/new-topic')}}">Tạo Đề tài</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/pending-topics')}}">Phê duyệt Đề tài</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/manage-topics')}}">Quản lí Đề tài</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">Tài liệu</a>
                        <div id="submenu-4" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/new-task')}}">Tạo Nhiệm vụ</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/manage-tasks')}}">Quản lí Nhiệm vụ</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5">Lịch trình</a>
                        <div id="submenu-5" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/new-plan')}}">Tạo Lịch trình</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/manage-plans')}}">Quản lí Lịch trình</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                    <li class="nav-item">
                        
                        <a class="nav-link" href="{{URL::to('/statistics')}}">Thống kê</a>
            
                    </li>
        
                    <hr>
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10">Khoa</a>
                        <div id="submenu-10" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/new-faculty')}}">Thêm Khoa</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/manage-faculties')}}">Quản lí Khoa</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Bộ môn</a>
                        <div id="submenu-11" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/new-department')}}">Thêm Bộ môn</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/manage-departments')}}">Quản lí Bộ môn</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                </ul>
                <hr>
                
                <div>
                    <form>
                        <div class="input-group input-group-dark input-group-round">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">search</i>
                                </span>
                            </div>
                            <input type="search" class="form-control form-control-dark" placeholder="Search" aria-label="Search app">
                        </div>
                    </form>  
                </div>
            </div>
    
            <div class="d-none d-lg-block">
        
                <!-- already Logged in -->
                <div class="dropup">
                    <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img alt="avatar" src="assets/img/avatar-man.png" class="avatar" />
                    </a>
                    <p class="d-inline-block ml-1 text-light text-break">Xin chào, <span class="text-warning">
                    <?php
                        // $first_name = Session::get('first_name');
                        // if($first_name){
                        //     echo $first_name;
                        // }
                        $name = Session::get('name');
                        if($name){
                            echo $name;
                        }
                    ?>


                    </span></p>
                    <div class="dropdown-menu text-center">
                        <a href="{{URL::to('/account-settings')}}" class="dropdown-item">Profile</a>
                        <a href="{{URL::to('/control-panel')}}"class="dropdown-item">Control Panel</a>
                        <a href="{{URL::to('/logout')}}" class="dropdown-item">Log Out</a>
                    </div>
                </div>
                <!-- already Logged in -->
        
                <!-- For guest only -->
                <!-- <a href="login.html"><button type="button" class="btn btn-outline-warning">Login</button></a>
                <a href="register.html"><button type="button" class="btn btn-outline-info">Register</button></a> -->
                <!-- For guest only -->
            </div>
    
        </div>
    
        <div class="main-container fullscreen">
            <div class="main-container">
 

        <main>
            @yield('content')
        </main>

                </div>
            </div>
        </div>
        
</body>

</html>