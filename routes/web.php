<?php

use Illuminate\Support\Facades\Route;
//now to import the users controller that we want to user
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\addMember;
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
Route::post("add",[memberController::class,'addData']);
Route::get("list",[memberController::class,'list']);
Route::get('delete/{id}',[memberController::class,'delete']);
Route::get('edit/{id}',[memberController::class,'showData']);
Route::post('edit',[memberController::class,'update']);
Route::view("addMember","add");




