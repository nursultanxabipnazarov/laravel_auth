<?php

use App\Http\Controllers\AuthController;
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

Route::get('/',[AuthController::class,'home'])->name('home');




Route::get('/login',[AuthController::class,'loginView'])->name('loginView');

Route::get('/register',[AuthController::class,'registerView'])->name('registerView');

Route::post('register',[AuthController::class ,'register'])->name('register');

Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');

Route::post('/login',[AuthController::class,'login'])->name('login');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');