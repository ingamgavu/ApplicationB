<?php

use Illuminate\Support\Facades\Route;
//now to import the users controller that we want to user
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\UserController;
/*
|-------------- ------------------------------------------------------------
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
Route::get("users",[UserController::class,'index']);
Route::view("login","login");
Route::view("member","member");
Route::view("home","home");
Route::view("noaccess","noaccess");



