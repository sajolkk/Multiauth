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


	/// custom authication
Route::get('/admin', 'AdminController@index');
Route::get('/admin_login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin-login-submit', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::post('/admin/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
Route::get('/admin/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('/admin/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
Route::post('/admin/register', 'Auth\AdminRegisterController@register')->name('admin.register');







