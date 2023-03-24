<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\homeController;

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
Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/show',[homeController::class,'show'])->name('show');

//Admin Route
Route::resource('admin', AdminController::class);
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

//Post Route
Route::prefix('admin')->name('admin.')->group(function (){
    Route::resource('posts',PostController::class);
});
