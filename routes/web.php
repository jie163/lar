<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::any('foo', function () {
    return 'Hello World';
});
// Route::any('foo', function () {
//     return 'Hello World';
// });

//Route::get('/edit', 'HomeController@edit');
//Route::any('/admin/add', 'ShowProfile@add');


Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

// 注册
Route::get('/signup', 'UsersController@create')->name('signup');

Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');

Route::resource('users','UsersController');
// 登录
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');


Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');
