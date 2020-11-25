@extends('layouts.master')

@section('content')
<div class="main-container">
  
  <div class="breadcrumb-bar navbar bg-white sticky-top">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="{{ url('account-settings') }}">Profile</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Account Settings</li>
          </ol>
      </nav>
  </div>

  <div class="d-flex justify-content-end mr-2">
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
          Vui lòng cập nhật đầy đủ thông tin để <strong>kích hoạt</strong> tài khoản! 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
  </div>


  <div class="container">
      <div class="row justify-content-center mt-5">
          <div class="col-lg-3 mb-3">
              <ul class="nav nav-tabs flex-lg-column" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Your Profile</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">Password</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="integrations-tab" data-toggle="tab" href="#integrations" role="tab" aria-controls="integrations" aria-selected="false">Integrations</a>
                  </li>
              </ul>
          </div>

          <div class="col-xl-8 col-lg-9">
              <div class="card">
                  <div class="card-body">
                      <div class="tab-content">
                          <div class="tab-pane fade show active" role="tabpanel" id="profile">

                              <div class="media mb-4">
                                  <img alt="Image" src="{{ url('assets/img/avatar-man.png') }}"class="avatar avatar-lg" />
                                  <div class="media-body ml-3">
                                      <div class="custom-file custom-file-naked d-block mb-1">
                                          <input type="file" class="custom-file-input d-none" id="avatar-file">
                                          <label class="custom-file-label position-relative" for="avatar-file">
                                              <span class="btn btn-primary">Upload avatar</span>
                                          </label>
                                      </div>
                                      <small>For best results, use an image at least 256px by 256px in either .jpg or .png format</small>
                                  </div>
                              </div>
                              <!--end of avatar-->

                              <form>

                                  <div class="form-group row align-items-center">
                                      <label class="col-3">First Name<span class="text-danger">*</span></label>
                                      <div class="col">
                                          <input type="text" placeholder="First name" value="Mận" name="profile-first-name" class="form-control" required />
                                      </div>
                                  </div>

                                  <div class="form-group row align-items-center">
                                      <label class="col-3">Last Name</label>
                                      <div class="col">
                                          <input type="text" placeholder="Last name" value="Nguyễn Đức" name="profile-last-name" class="form-control" required />
                                      </div>
                                  </div>

                                  <div class="form-group row align-items-center">
                                      <label class="col-3">Birthday</label>
                                      <div class="col">
                                          <input class="form-control" type="text" placeholder="Select a Date" data-flatpickr data-alt-input="true" data-max-date="today" required>
                                      </div>
                                  </div>

                                  <div class="form-group row align-items-center">
                                      <label class="col-3">Gender</label>
                                      <div class="col">
                                          <select name="profile-gender" class="form-control" required>
                                              <option>Male</option>
                                              <option>Female</option>
                                              <option>Others</option>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="form-group row align-items-center">
                                      <label class="col-3">Email</label>
                                      <div class="col">
                                          <input type="email" placeholder="Enter your email address" value="mannd@duytan.edu.vn" name="profile-email" class="form-control" readonly />
                                      </div>
                                  </div>
                  
                                  <div class="form-group row align-items-center">
                                      <label class="col-3">Phone</label>
                                      <div class="col">
                                          <input type="text" placeholder="Enter your phone number" name="profile-phone-number" class="form-control" required />
                                      </div>
                                  </div>

                                  <div class="form-group row align-items-center">
                                      <label class="col-3">Student ID</label>
                                      <div class="col">
                                          <input type="text" placeholder="Enter your student ID" name="profile-student-id" class="form-control" required />
                                      </div>
                                  </div>

                                  <div class="form-group row align-items-center">
                                      <label class="col-3">Class</label>
                                      <div class="col">
                                          <input type="text" placeholder="Enter your class" name="profile-class" class="form-control" required />
                                      </div>
                                  </div>

                                  <div class="form-group row align-items-center">
                                      <label class="col-3">Faculty</label>
                                      <div class="col">
                                          <select name="profile-faculty" class="form-control" required>
                                              <option selected>International School</option>
                                              <option>CSE Center</option>
                                              <option>IT Faculty</option>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="form-group row align-items-center">
                                      <label class="col-3">Department</label>
                                      <div class="col">
                                          <select name="profile-department" class="form-control">
                                              <option selected>CMU</option>
                                              <option>PSU</option>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="form-group row align-items-center">
                                      <label class="col-3">Language</label>
                                      <div class="col">
                                          <select name="profile-language" class="form-control">
                                              <option selected>Vietnamese</option>
                                              <option>English</option>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-3">Bio</label>
                                      <div class="col">
                                          <textarea placeholder="Tell us a little about yourself" name="profile-bio" class="form-control" rows="4"></textarea>
                                          <small><span class="font-weight-bold text-danger-2">You will take a F point for this course if the above information is NOT true</span></small>
                                      </div>
                                  </div>

                                  <div class="row justify-content-end">
                                      <button type="submit" class="btn btn-primary">Save</button>
                                  </div>

                              </form>

                          </div>

                          <!-- ### Here is for tabs #### -->

                          <div class="tab-pane fade" role="tabpanel" id="password">

                              <form>
                                  <div class="form-group row align-items-center">
                                      <label class="col-3">Current Password</label>
                                      <div class="col">
                                          <input type="password" placeholder="Enter your current password" name="password-current" class="form-control" />
                                      </div>
                                  </div>
                                  <div class="form-group row align-items-center">
                                      <label class="col-3">New Password</label>
                                      <div class="col">
                                          <input type="password" placeholder="Enter a new password" name="password-new" class="form-control" />
                                      <small>Password must be at least 8 characters long</small> 
                                      </div>
                                  </div>
                                  <div class="form-group row align-items-center">
                                      <label class="col-3">Confirm Password</label>
                                      <div class="col">
                                          <input type="password" placeholder="Confirm your new password" name="password-new-confirm" class="form-control" />
                                      </div>
                                  </div>
                                  <div class="row justify-content-end">
                                      <button type="submit" class="btn btn-primary">Change Password</button>
                                  </div>
                              </form>

                          </div>

                          <div class="tab-pane fade" role="tabpanel" id="integrations">
                              <p class="text-center">Coming soon!</p>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>  
</div>
 @endsection
