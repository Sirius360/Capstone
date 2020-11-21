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
//========================================================================== test layout
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
Route::get('new-task','AdminController@new_task');
Route::get('new-plan','AdminController@new_plan');
Route::get('new-topic','AdminController@new_topic');
Route::get('pending-topics','AdminController@pending_topics');
Route::get('statistics','AdminController@statistics');
Route::get('team-details','AdminController@team_details');
Route::get('template','AdminController@template');


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
