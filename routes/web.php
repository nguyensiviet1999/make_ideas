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

Route::get('/auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
Route::get('/auth/{provide}/callback', 'Auth\SocialAuthController@handleProviderCallback');
Route::get('/category/{id_category}', 'Auth\AuthController@home');
Route::get('create-articles', 'Frontend\ArticlesController@showCreateArticles');

Route::post('post-articles','Frontend\ArticlesController@createArticles');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');
Route::get('ckeditor', 'CkeditorController@index');
Route::get('like/{post_id}', 'Frontend\ArticlesController@like');
Route::get('unlike/{post_id}', 'Frontend\ArticlesController@unLike');
Route::get('count-like/{post_id}', 'Frontend\ArticlesController@countLike');
Route::get('get-status-like/{post_id}', 'Frontend\ArticlesController@statusLike');

// Route::get('/', function () {
//
//     $petani = DB::table('categories')->get();
//     return view('frontend.homepage', ['petani' => $petani]);
// });
