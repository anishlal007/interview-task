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

Route::get('/', function () {
    return view('index');
});
Route::get('user_register/','democontroller@userregister');
Route::get('friend_list/','democontroller@friendlist');
Route::post('uregister/','democontroller@register');
Route::post('ulogin/','democontroller@login');
Route::get('user_profile/','democontroller@userprofile');
Route::get('/userlogout', 'democontroller@userlogout');
