<?php
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\FileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("logout",[LogoutController::class,'logout']);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Routes  for admin
Route::group(['prefix'=>'admin','middleware' => ['auth','role:admin']], function(){
        Route::get('/','AdminController@index');
    // Route::get('abc', function(){
    //     return 'Quan ly admin';
    // });

});

Route::group(['prefix'=>'admin','middleware' => ['auth','role:admin']], function(){
    Route::get('announcements/new','AdminController@new_announcement');
    Route::get('announcements','AdminController@manage_announcements');

    Route::get('groups/new','AdminController@new_group');
    Route::get('groups','AdminController@manage_groups');
    Route::get('group-details','AdminController@group_details');

    Route::get('teams/new','AdminController@new_team');
    // Thiếu route quản lý team
    Route::get('team-details','AdminController@team_details');

    Route::get('topics/new','AdminController@new_topic');
    Route::get('topics/pending','AdminController@pending_topics');
    Route::get('topics','AdminController@manage_topics');

    Route::get('plans/new','AdminController@new_plan');
    Route::get('plans','AdminController@manage_plans');

    Route::get('faculties/new','AdminController@new_faculty');
    Route::get('faculties','AdminController@manage_faculties');

    Route::get('departments/new','AdminController@new_department');
    Route::get('departments','AdminController@manage_departments');

    Route::get('statistics','AdminController@statistics');

    Route::get('template','AdminController@template');

    Route::get('profile/{id}/update','AdminController@account_settings');
    Route::post('profile/{id}/update','AdminController@account_update');

   //Route::get('control-panel','AdminController@control_panel');

    // Route::get('account-settings','AdminController@account_settings');
    Route::get('control/users','AdminController@control_panel');
    Route::get('control/users/add','AdminController@add_user');

    Route::get('edit-group','AdminController@edit_group');
    Route::get('edit-team','AdminController@edit_team');
    Route::get('edit-topic','AdminController@edit_topic');


    // =========================== POST //
    Route::POST('/announcements/save/{id}','AdminController@save_announcement');
    Route::POST('/announcements/home/save/{id}','AdminController@save_announcement_home');
    Route::POST('/faculty/new-faculty','AdminController@save_new_faculty');
    Route::POST('/department/new-department','AdminController@save_new_department');
    //  Route::POST('save-new-topic','AdminController@save_new_topic');

    // =========================== Announcement Visibility //
    // Route::get('/admin/public-announcement/{announcement_visibility_id}','AdminController@public_announcements');
    // Route::get('/admin/members-announcement/{announcement_visibility_id}','AdminController@members_announcements');
    // Route::get('/admin/lock-announcement/{announcement_visibility_id}','AdminController@lock_announcements');

    //============================ Edit & Delete & Update //
    Route::get('/announcements/management/{id}/edit','AdminController@edit_announcement');
    Route::get('/announcements/{id}/edit','AdminController@edit_announcement_home');

    Route::get('/announcements/management/{id}/delete','AdminController@delete_announcement');
    Route::get('/announcements/{id}/delete','AdminController@delete_announcement_home');

    Route::post('/announcements/management/{id}/update','AdminController@update_announcement');
    Route::post('/announcements/{id}/update','AdminController@update_announcement_home');

// === faculties
    Route::get('/faculties/management/{id}/edit','AdminController@edit_faculties');
    Route::get('/faculties/management/{id}/delete','AdminController@delete_faculties');

    Route::post('/faculties/management/{id}/update','AdminController@update_faculties');
//======department

    Route::get('/departments/management/{id}/edit','AdminController@edit_department');
    Route::get('/departments/management/{id}/delete','AdminController@delete_department');
    Route::post('/departments/management/{id}/update','AdminController@update_department');
//======



































});

//==========================================================================



//==============================================================================

























// Routes  for mentor
Route::group(['prefix'=>'mentor','middleware' => ['auth','role:mentor']], function(){
    Route::get('/','MentorController@index');
// Route::get('abc', function(){
//     return 'Quan ly admin';
// });
});
// Routes  for user
Route::group(['prefix'=>'users','middleware' => ['auth','role:users']], function(){
    Route::get('/','UsersController@index');
// Route::get('abc', function(){
//     return 'Quan ly admin';
// });
});
Route::get("forgot",[ForgotPasswordController::class,'forgot_password']);
//avatar
Route::post('/img-upload','FileController@img_upload');
