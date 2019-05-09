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

    $tasks = [
        'Task subject 1',
        'Task subject 2',
        'Task subject 3'
    ];

    return view('welcome')->withTasks($tasks);
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/alphavantage', function () {
    return view('alphavantage');
});
