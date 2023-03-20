<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;

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
//Main Landing Page
Route::get('/', [\App\Http\Controllers\homeController::class, 'index'])->name('home');

//Admin Route
Route::resource('admin', AdminController::class);

//Post Route
Route::resource('post', PostController::class);
