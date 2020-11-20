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
Route::get('new-announcement','AdminController@new_announcement');
Route::get('manage-announcements','AdminController@manage_announcements');


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
