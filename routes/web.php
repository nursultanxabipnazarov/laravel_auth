<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoomController;
use App\Livewire\Applic;
use App\Models\Group;
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
Route::get('/floor/destroy/{id}',[FloorController::class,'destroy'])->name('destroy');


//Room

Route::get('/room/index',[RoomController::class,'index'])->name('indexRoom');
Route::get('/room/create',[RoomController::class,'create'])->name('createRoom');
Route::post('room/store',[RoomController::class,'store'])->name('storeRoom');



//Student app

Route::get('/application/index',[ApplicationController::class,'index'])->name('indexApp');
Route::get('/application/create',[ApplicationController::class,'create'])->name('createApp');
Route::post('/application/store',[ApplicationController::class,'store'])->name('storeApp');
Route::get('/application/show/{id}',[ApplicationController::class,'show'])->name('showApp');


//liveware

// Route::get('test',Applic::class);


//Test

Route::get('/test',[ApplicationController::class,'test'])->name('test');



//Fakultet 
Route::get('fakultet/index',[FacultyController::class,'index'])->name('indexFakultet');

Route::get('/fakultet/create',[FacultyController::class,'create'])->name('createFakultet');
Route::post('fakultet/store',[FacultyController::class,'store'])->name('storeFakultet');


//Gruppa
Route::get('/group/index',[GroupController::class,'index'])->name('indexGroup');

Route::get('/group/create',[GroupController::class,'create'])->name('createGroup');
Route::post('/group/store',[GroupController::class,'store'])->name('storeGroup');


//admin/application

Route::get('admin/application/index',[ApplicationController::class,'index'])->name('indexApp');
Route::get('admin/application/show/{id}',[AdminController::class,'show'])->name('adminSHowApp');


//Message

Route::post('app/message/',[MessageController::class,'store'])->name('storeMessage');

