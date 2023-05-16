<?php

use App\Http\Controllers\CustomRegisterController;
use App\Http\Controllers\Demo\DemoController;
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


Route::controller(DemoController::class)->group(function(){
    Route::get('/about','index')->name('about');
    Route::get('/contact','contactMethod');
});

 Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/register',[CustomRegisterController::class,'register'])->name('register');


Route::post('/register',[CustomRegisterController::class,'registerUser'])->name('register.show');


Route::get('/login',[CustomRegisterController::class,'login'])->name('login');

Route::post('/login',[CustomRegisterController::class,'loginUser'])->name('login.show');
