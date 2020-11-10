<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Routes  for admin
Route::group(['prefix'=>'admin','middleware' => ['auth','role:admin']], function(){
        Route::get('/','AdminController@index');
    // Route::get('abc', function(){
    //     return 'Quan ly admin';
    // });
});
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