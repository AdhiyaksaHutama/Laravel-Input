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

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/posts',[
    'uses' => 'Postscontroller@create',
    
] );

Route::post('/posts',[
    'uses' => 'Postscontroller@store',
    'as' => 'posts.store'
] );

Route::delete('/shows',[
    'uses' => 'Postscontroller@destroy',
    'as' => 'posts.destroy'
] );

Route::get('/shows{id}/edit','Postscontroller@edit' );
Route::PATCH('/shows{id}/update','Postscontroller@update');
Route::get('/shows','Postscontroller@viewShow');
Route::resource('posts', 'Postscontroller');

