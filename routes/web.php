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


// Route::get('/', 'Frontend\ContentController@index');

Route::get('/', 'Frontend\HomepageController@index')->name('homepage');

Route::get('/story', 'Frontend\StoryController@index')->name('story');

Route::get('/signin', 'Auth\AuthController@signin')->name('signin');

Route::get('/signup', 'Auth\AuthController@signup')->name('signup');

Route::post('post-login', 'Auth\AuthController@postLogin');
Route::post('post-register', 'Auth\AuthController@postRegister');

Route::get('home', 'Auth\AuthController@home');
Route::get('logout', 'Auth\AuthController@logout');

// Route::get('/', function () {
//
//     $petani = DB::table('categories')->get();
//     return view('frontend.homepage', ['petani' => $petani]);
// });
