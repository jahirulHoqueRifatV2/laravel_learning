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

Route::get('/post/{key}', 'PostController@show');


Route::get('/project', function () {
    return view('project.home');
});
Route::get('/project/home', function () {
    return view('project.home');
});

Route::get('/project/about', function () {
    return view('project.about');
});
