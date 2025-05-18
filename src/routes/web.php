<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Laravel\Fortify\Fortify;

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
Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm',[ContactController::class,'confirm']);
Route::post('/thanks', [ContactController::class,'store']);

Route::get('/confirm', function () {
    return redirect('/');
});


Route::get('/register',[AdminController::class,'index']);
Route::post('/register', [AdminController::class, 'store'])->name('register');
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');

Route::get('/login',[LoginController::class,'index']);
Route::post('/admin',[LoginController::class,'store']);
Route::get('/admin',[UserController::class,'index']);

