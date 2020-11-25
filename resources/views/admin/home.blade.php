@extends('layouts.master')

@section('content')
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
@endsection
