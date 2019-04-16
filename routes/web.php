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
    return view('index');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/notice', function () {
    return view('notice');
});

Route::get('/research', function () {
    return view('research');
});

Route::get('/scholarship', function () {
    return view('scholarship');
});

Route::get('/teacher', function () {
    return view('teacher');
});

