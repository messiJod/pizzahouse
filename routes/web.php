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

Route::get('/testimonial', function () {
    $users =[
        ["name"=>"Abhi","age"=>23],
        ["name"=>"Chap", "age"=>45]
    ];

    $contact =request('contact');
    return view('testimonial',['users' =>$users,'contact'=>$contact]);
});
