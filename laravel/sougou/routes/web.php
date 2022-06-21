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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/create', function () {
//     return view('posts.create');
// });

//一覧表示
// Route::resource('posts', 'Postcontroller');


//postコントローラーがないので作る

Route::get('/posts', 'PostController@index')->name('posts.index');


Route::get('/posts/create', 'PostController@create')->name('posts.create');


Route::post('/posts', 'PostController@store')->name('posts.store');


Route::get('/posts/{id}', 'PostController@show')->name('posts.show');


Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');


Route::put('/posts/{id}', 'PostController@update')->name('posts.update');


Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');




//新規投稿画面へ
Route::get('/comments/create/{post_id}', 'CommentController@create')->name('comments.create');

//投稿内容保存
Route::post('/comments', 'CommentController@store')->name('comments.store');

