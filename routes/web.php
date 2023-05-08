<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Trang index
Route::get('/', function () {
    return view('index');
});
//Trang dang nhap
Route::get('/login', function () {
    return view('login');
});
//Trang dang ky
Route::get('/register',function (){
    return view('register');
});

