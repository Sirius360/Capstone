<?php
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LogoutController;



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
    Route::get('new-announcement','AdminController@new_announcement');
    Route::get('manage-announcements','AdminController@manage_announcements');

    Route::get('account-settings','AdminController@account_settings');
    Route::get('control-panel','AdminController@control_panel');
    Route::get('edit-group','AdminController@edit_group');
    Route::get('edit-team','AdminController@edit_team');
    Route::get('group-details','AdminController@group_details');
    Route::get('manage-departments','AdminController@manage_departments');
    Route::get('manage-faculties','AdminController@manage_faculties');
    Route::get('manage-groups','AdminController@manage_groups');
    Route::get('manage-plans','AdminController@manage_plans');
    Route::get('manage-tasks','AdminController@manage_tasks');
    Route::get('manage-topics','AdminController@manage_topics');
    Route::get('new-department','AdminController@new_department');
    Route::get('new-faculty','AdminController@new_faculty');
    Route::get('new-group','AdminController@new_group');
    Route::get('new-team','AdminController@new_team');
    Route::get('new-task','AdminController@new_task');
    Route::get('new-plan','AdminController@new_plan');
    Route::get('new-topic','AdminController@new_topic');
    Route::get('pending-topics','AdminController@pending_topics');
    Route::get('statistics','AdminController@statistics');
    Route::get('team-details','AdminController@team_details');
    Route::get('template','AdminController@template');

    //POST=================================================================

     Route::POST('announcement/save-announcement','AdminController@save_announcement');
    //  Route::POST('save-new-announcement','AdminController@save_new_announcement');
    //  Route::POST('save-new-faculty','AdminController@save_new_faculty');
    //  Route::POST('save-new-department','AdminController@save_new_department');
    //  Route::POST('save-new-topic','AdminController@save_new_topic');

//======================================================================================= announcement_visibility
// Dẹp, khỏi làm
    // Route::get('/admin/public-announcement/{announcement_visibility_id}','AdminController@public_announcements');
    // Route::get('/admin/members-announcement/{announcement_visibility_id}','AdminController@members_announcements');
    // Route::get('/admin/lock-announcement/{announcement_visibility_id}','AdminController@lock_announcements');

//============================================================================== edit & delete & update
//Route::get('edit-announcement/{id}','AdminController@edit_announcement');
Route::get('/announcement/{id}/edit','AdminController@edit_announcement_home');
//Route::get('delete-announcement/{id}','AdminController@delete_announcement');

Route::get('/announcement/{id}/delete','AdminController@delete_home_announcement');

//Route::post('update-announcement/{id}','AdminController@update_announcement');
Route::post('/announcement/{id}/update','AdminController@update_announcement_home');

// ===



































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
