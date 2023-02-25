<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserContactController;

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

Route::get('/users',[UserController::class,'index'])->name('user.index');
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::post('/user/store',[UserController::class,'store'])->name('user.store');
Route::get('/user/{id}/edit',[UserController::class,'edit'])->name('user.edit');
Route::put('/user/{id}/update',[UserController::class,'update'])->name('user.update');
Route::get('/user/{id}/show',[UserController::class,'show'])->name('user.show');

Route::get('/contact/{user_id}/create',[UserContactController::class,'create'])->name('contact.create');
Route::post('/contact/{user_id}/store',[UserContactController::class,'store'])->name('contact.store');
Route::get('/contact/{user_id}/{contact_id}/edit',[UserContactController::class,'edit'])->name('contact.edit');
Route::put('/contact/{user_id}/{contact_id}/update',[UserContactController::class,'update'])->name('contact.update');
