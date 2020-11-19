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
    
            <a class="navbar-brand" href="index.html">
                <img alt="dtu" src="assets/img/duytan-university.svg" />
            </a>
            <div class="d-flex align-items-center">
        
                <!-- Already Logged in -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-block d-lg-none ml-2">
                    <div class="dropdown">
                        <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img alt="Image" src="assets/img/avatar-man.png" class="avatar" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right text-center">
                            <a href="account-settings.html" class="dropdown-item">Profile</a>
                            <a href="control-panel.html" class="dropdown-item">Control Panel</a>
                            <a href="portal.html" class="dropdown-item">Log Out</a>
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
                                    <a class="nav-link" href="new-announcement.html">Tạo Thông báo</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="manage-announcements.html">Quản lí Thông báo</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">Nhóm</a>
                        <div id="submenu-2" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="new-group.html">Tạo Nhóm</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="manage-groups.html">Quản lí Nhóm</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">Đề tài</a>
                        <div id="submenu-3" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="new-topic.html">Tạo Đề tài</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="pending-topics.html">Phê duyệt Đề tài</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="manage-topics.html">Quản lí Đề tài</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">Tài liệu</a>
                        <div id="submenu-4" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="new-task.html">Tạo Nhiệm vụ</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="manage-tasks.html">Quản lí Nhiệm vụ</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5">Lịch trình</a>
                        <div id="submenu-5" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="new-plan.html">Tạo Lịch trình</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="manage-plans.html">Quản lí Lịch trình</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                    <li class="nav-item">
                        
                        <a class="nav-link" href="statistics.html">Thống kê</a>
            
                    </li>
        
                    <hr>
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10">Khoa</a>
                        <div id="submenu-10" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="new-faculty.html">Thêm Khoa</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="manage-faculties.html">Quản lí Khoa</a>
                                </li>
                
                            </ul>
                        </div>
            
                    </li>
        
                    <li class="nav-item">
            
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Bộ môn</a>
                        <div id="submenu-11" class="collapse" data-parent="#navbar-collapse">
                            <ul class="nav nav-small flex-column">
                
                                <li class="nav-item">
                                    <a class="nav-link" href="new-department.html">Thêm Bộ môn</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="manage-departments.html">Quản lí Bộ môn</a>
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
                        <a href="account-settings.html" class="dropdown-item">Profile</a>
                        <a href="control-panel.html" class="dropdown-item">Control Panel</a>
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
    
        <div class="main-container">
            <!-- 
            <div class="navbar bg-white breadcrumb-bar">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Overview</a>
                    </li>
                    <li class="breadcrumb-item"><a href="pages-app.html#">App Pages</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Task</li>
                </ol>
                </nav>
        
                <div class="dropdown">
                    <button class="btn btn-round" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons">settings</i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
            
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#task-edit-modal">Edit</a>
                        <a class="dropdown-item" href="#">Mark as Complete</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Archive</a>
            
                    </div>
                </div>
        
            </div>
            -->
    
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-xl-10">
            
                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active" id="task" role="tabpanel">
                                
                                <div class="content-list" data-filter-list="content-list-body">
                                    <div class="row content-list-head">
                                        <div class="col-auto">
                                            <h3>Announcements</h3>
                                            <button class="btn btn-round" data-toggle="modal" data-target="#note-add-modal">
                                                <i class="material-icons">add</i>
                                            </button>
                                        </div>
                                        <form class="col-md-auto">
                                            <div class="input-group input-group-round">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">filter_list</i>
                                                    </span>
                                                </div>
                                                <input type="search" class="form-control filter-list-input" placeholder="Filter notes" aria-label="Filter notes">
                                            </div>
                                        </form>
                                    </div>
                                    <!--end of content list head-->
                                    <div class="content-list-body">
                    
                                        <div class="card card-note">
                                            <div class="card-header">
                                                <div class="media align-items-center text-break">
                                                    <img alt="Peggy Brown" src="assets/img/avatar-man.png" class="avatar" data-toggle="tooltip" data-title="Nguyễn Đức Mận" data-filter-by="alt" />
                                                    <div class="media-body">
                                                        <h6 class="mb-0 text-danger" data-filter-by="text">Thông báo nộp lại proposal bản final!</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span data-filter-by="text">Just now</span>
                                                    <div class="ml-1 dropdown card-options">
                                                        <button class="btn-options" type="button" id="note-dropdown-button-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">more_vert</i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#note-edit-modal">Edit</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body" data-filter-by="text">
                                                <p>Chào các Bạn,</p>
                                                <p>Thầy đã tạo mục nộp bản final proposal trên e-learning, yêu cầu các bạn hoàn thiện và nộp lên lại để thầy xác nhận tên đề tài.</p>
                                                <p>Cần chú ý là tên đề tài phải chuẩn và sau khi nộp lên là KHÔNG thay đổi được nữa.</p>
                                                <p>Các bạn nghiêm túc chỉnh sửa, tôi sẽ tự review lại toàn bộ - nếu phát hiện các bạn ko chỉnh sửa gì sẽ bị xử lý!</p>
                                                <p>Hạn cuối là cuối tuần này. Capstone 2 gửi qua email.</p>
                                                <p>M.</p>
                                                <div class="media media-attachment">
                                                    <div class="text-primary">
                                                        <i class="material-icons">attach_file</i>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#" data-filter-by="text">Template Proposal.docx</a>
                                                        <span data-filter-by="text">24kb Document</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="card card-note">
                                            <div class="card-header">
                                                <div class="media align-items-center text-break">
                                                    <img alt="Peggy Brown" src="assets/img/avatar-man.png" class="avatar" data-toggle="tooltip" data-title="Nguyễn Đức Mận" data-filter-by="alt" />
                                                    <div class="media-body">
                                                        <h6 class="mb-0" data-filter-by="text"><p class="text-danger d-inline-block">[Thông báo số 4]</p> Đăng ký buổi Review proposal</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span data-filter-by="text">Yesterday</span>
                                                    <div class="ml-1 dropdown card-options">
                                                        <button class="btn-options" type="button" id="note-dropdown-button-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">more_vert</i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#note-edit-modal">Edit</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body" data-filter-by="text">
                                                <p>Chào các Bạn,</p>
                                                <p>Các bạn thực hiện mấy việc sau:</p>
                                                <p>1. Đăng ký buổi Review (không theo giờ từng nhóm lẻ mà là 1 group nhiều nhóm cùng lúc)</p>
                                                <p>2. Các nhóm khác cùng tham dự để ghi chú và xem nhóm mình thiếu sót gì thì note cho nhanh nhằm giúp người review không lặp lại việc comment các lỗi giống nhau</p>
                                                <p>3. Sau khi review xong, các nhóm dựa trên việc note thông tin trực tiếp cũng có thể xem sheet kết quả để có thêm thông tin chỉnh sửa lại Proposal và nộp lại (sẽ có thông báo nộp)</p>
                                                <p>4. Khi review - yêu cầu các thành viên của nhóm phải có mặt đủ - vào link Zoom để mở và trình bày phần của nhóm mình.</p>
                                                <a href="https://docs.google.com/spreadsheets/d/1-s4UvSriHgTRLMoT2U4nz64ISE252oZm/edit#gid=1459804463" target="_blank">https://docs.google.com/spreadsheets/d/1-s4UvSr....gid=1459804463 </a>
                                                <div class="media media-attachment">
                                                    <div class="text-primary">
                                                        <i class="material-icons">attach_file</i>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#" data-filter-by="text">Lich Review Capstone Proposal 2020F.xlsx</a>
                                                        <span data-filter-by="text">24kb Document</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="card card-note">
                                            <div class="card-header">
                                                <div class="media align-items-center text-break">
                                                    <img alt="Peggy Brown" src="assets/img/avatar-man.png" class="avatar" data-toggle="tooltip" data-title="Nguyễn Đức Mận" data-filter-by="alt" />
                                                    <div class="media-body">
                                                        <h6 class="mb-0" data-filter-by="text"><p class="text-danger d-inline-block">[Thông báo số 3]</p> Nộp Proposal qua e-learning</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span data-filter-by="text" data-toggle="tooltip" data-title="14:31, 20 thg 8, 2020">20/08</span>
                                                    <div class="ml-1 dropdown card-options">
                                                        <button class="btn-options" type="button" id="note-dropdown-button-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">more_vert</i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#note-edit-modal">Edit</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body" data-filter-by="text">
                                                <p>Chào các bạn, các bạn làm theo hướng dẫn sau.</p>
                                                <p>1. Yêu cầu mỗi nhóm cử 1 đại diện nộp tài liệu trước thời hạn deadline là 11:00 PM ngày 24/08/2020.</p>
                                                <p>2. Proposal PHẢI l&agrave;m đ&uacute;ng mẫu qui định - lưu sang PDF v&agrave; đặt t&ecirc;n file<strong>&nbsp;&lt;Mã số nhóm&gt;_&lt;Tên viết tắt dự án&gt;_&lt;ver 1.x&gt;.pdf,&nbsp;</strong>ví dụ:&nbsp;<strong>C1SE.07_BOT4Tourist_ver 1.1.pdf</strong></p>
                                                <p>3. KHÔNG nhận nộp hồ sơ qua email.</p>
                                                <p>4. Proposal phải có xác nhận của Mentor (chụp email xác nhận của Mentor / hoặc chữ ký của mentor vào cuối tài liệu hoặc ngay sau trang bìa.</p>
                                                <p>5. Yêu cầu các nhóm họp với Mentor bằng Zoom, Google Meet hay gì đó thì phải lưu lại vết, minh chứng tổ chức hợp một cách đàng hoàng; thêm nữa, các nhóm cần tạo Slack hoăc các công cụ lưu được vết làm việc chung, họp hành .... để đảm bảo ktra tiến độ làm việc sau này. KHÔNG DÙNG FB để giao việc!</p>
                                                <p>BM CMU</p>
                                            </div>
                                        </div>
                    
                                        <div class="card card-note">
                                            <div class="card-header">
                                                <div class="media align-items-center text-break">
                                                    <img alt="Peggy Brown" src="assets/img/avatar-man.png" class="avatar" data-toggle="tooltip" data-title="Nguyễn Đức Mận" data-filter-by="alt" />
                                                    <div class="media-body">
                                                        <h6 class="mb-0" data-filter-by="text"><p class="text-danger d-inline-block">[Thông báo số 2]</p> Họp triển khai đề tài, hướng dẫn làm proposal và tiến độ Capstone</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span data-filter-by="text" data-toggle="tooltip" data-title="22:58, 10 thg 8, 2020">10/08</span>
                                                    <div class="ml-1 dropdown card-options">
                                                        <button class="btn-options" type="button" id="note-dropdown-button-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">more_vert</i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#note-edit-modal">Edit</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body" data-filter-by="text">
                                                <p>Chào các Bạn,</p>
                                                <p>Thầy lưu ý mấy việc sau:</p>
                                                <p>1. KHÔNG thay đổi thành viên nhóm vì lý do KHÔNG code được hoặc HỦY nhóm vì các bạn KHÔNG thống nhất đề tài hoặc KHÔNG HỢP để làm</p>
                                                <p>2. Đề tài CAPSTONE là KHÔNG được TRÙNG lặp lại đề tài cũ, hay 2 nhóm cùng đề tài. Đại diện nhóm email tên đề tài (Anh/Việt) và mô tả là đề tài làm gì để thầy duyệt tên trước. (qua email)</p>
                                                <p>3. Thầy thông báo lịch họp để hướng dẫn chỉnh sửa tên đề tài, các mẫu tài liệu và cách làm proposal.<br>
                                                Lịch họp qua Zoom ở bên dưới</p>
                                                <p><strong>Họp duyệt tên đề tài và hướng dẫn làm proposal Capstone<br>
                                                Time: Aug 12, 2020 08:30 AM Bangkok</strong></p>
                                                <p>Join Zoom Meeting<br>
                                                <a href="https://duytan.zoom.us/j/95434054984?pwd=elFuTlM5Rmh2V2pvQ3psc20va3RlQT09">https://duytan.zoom.us/j/95434054984?pwd=elFuTlM5Rmh2V2pvQ3psc20va3RlQT09</a></p>
                                                <p>Meeting ID: 954 3405 4984<br>
                                                Passcode: 633832</p>
                                                <p>4. Hiện đang có 1 topic- nhóm nào chọn báo lại</p>
                                                <p>M.</p>
                                                <div class="media media-attachment">
                                                <div class="text-primary">
                                                    <i class="material-icons">attach_file</i>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#" data-filter-by="text">Yeu cau viet phan mem Thong ke tren Facebook.docx</a>
                                                    <span data-filter-by="text">24kb Document</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                    
                                    </div>
                                </div>
                            </div>
                            <!--end of tab-->
                        </div>
                        
                        <!-- Tạo Thông báo -->
                        <form class="modal fade" id="note-add-modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Create an Announcement</h5>
                                        <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </div>
                                    <!--end of modal head-->
                                    <div class="modal-body">
                                        <div class="form-group row align-items-center">
                                            <label class="col-3">Title</label>
                                            <input class="form-control col" type="text" placeholder="Title" name="note-name" />
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">Content</label>
                                            <textarea class="form-control col" rows="10" placeholder="Write something here..." name="note-description"></textarea>
                                        </div>
                                        <hr>
                                        <h6>Visibility</h6>
                                        <div class="row">
                                            <div class="col">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="visibility-everyone" name="visibility" class="custom-control-input" checked>
                                                    <label class="custom-control-label" for="visibility-everyone">Everyone</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="visibility-members" name="visibility" class="custom-control-input">
                                                    <label class="custom-control-label" for="visibility-members">Members</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="visibility-me" name="visibility" class="custom-control-input">
                                                    <label class="custom-control-label" for="visibility-me">Just me</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end of modal body-->
                                    <div class="modal-footer">
                                        <button role="button" class="btn btn-primary" type="submit">Post</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Tạo Thông báo -->
            
                        <!-- Chỉnh sửa Thông báo -->
                        <form class="modal fade" id="note-edit-modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Chỉnh sửa Thông báo</h5>
                                        <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </div>
                                    <!--end of modal head-->
                                    <div class="modal-body">
                                        <div class="form-group row align-items-center">
                                            <label class="col-3">Tiêu đề</label>
                                            <input class="form-control col" type="text" placeholder="Note title" name="note-name" />
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">Nội dung</label>
                                            <textarea class="form-control col" rows="6" placeholder="Body text for note" name="note-description"></textarea>
                                        </div>
                                    </div>
                                    <!--end of modal body-->
                                    <div class="modal-footer">
                                        <button role="button" class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Chỉnh sửa Thông báo -->
                    </div>
                </div>
            </div>
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

    <!-- <script>
        $(document).ready(function(){  
            $(".nav-link").hover(function(){
                $(this).toggleClass("active");  
            });  
        });  
    </script> -->

</body>

</html>