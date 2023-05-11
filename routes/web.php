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
Route::get('/home',function (){
    return view('client/home');
});

//Trang dang nhap
Route::get('/login',[\App\Http\Controllers\LoginController::class,'viewLogin']);
Route::post('/postLogin',[\App\Http\Controllers\LoginController::class,'login']);

//Trang dang ky
Route::get('/register',[\App\Http\Controllers\RegisterController::class,'viewRegister']);
Route::post('/register',[\App\Http\Controllers\RegisterController::class,'storeaccount']);

//Dang xuat
Route::post('/logout',[\App\Http\Controllers\LoginController::class,'logout']);

//client
Route::get('client/home',[\App\Http\Controllers\ClientController::class,'getClient']);

//admin
Route::get('admin/home',[\App\Http\Controllers\AdminController::class,'getAdmin']);


