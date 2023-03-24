<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\HomePostController;
use App\Http\Controllers\Home\homeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('App\Http\Controllers\Home')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/posts/{post}', [HomePostController::class, 'show'])->name('home.posts.show');
    // other home routes
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('posts', AdminPostController::class);
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    // other admin routes
});

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
