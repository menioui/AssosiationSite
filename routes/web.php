<?php

use Illuminate\Support\Facades\Route;
use App\Content;

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
})->name('welcome');

Route::get('/a-propos', function () {
    $contents = Content::where('contentPage', 'LIKE', 'aboutPage')->get();
    return view('about', ['contents' => $contents]);
})->name('about');

Route::get('/actualites/{date}', 'EventController@showByDay')->name('events');

// ADMIN ROUTE
Route::get('/assopourtous/admin', 'HomeController@admin')->middleware('auth')->name('adminPanel');

Route::resource('actus', 'EventController')->middleware('auth');
Route::resource('content', 'ContentController')->middleware('auth');

// Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('/home', 'HomeController@index')->name('home');
