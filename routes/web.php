<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'home'])->name('home');


//Auth

Route::get('/login',[AuthController::class,'loginView'])->name('loginView');

Route::get('/register',[AuthController::class,'registerView'])->name('registerView');

Route::post('register',[AuthController::class ,'register'])->name('register');

Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');

Route::post('/login',[AuthController::class,'login'])->name('login');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');


//Floor

Route::get('floor/index',[FloorController::class,'index'])->name('indexFloor');
Route::get('floor/create',[FloorController::class,'create'])->name('createFloor');
Route::post('floor/store',[FloorController::class,'store'])->name('storeFloor');