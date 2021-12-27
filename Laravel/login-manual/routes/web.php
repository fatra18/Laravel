<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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




Route::middleware(['auth'])->group(function () {
    Route::get('home',[AuthController::class,'home'])->name('home');
    Route::get('/', function () {
        return view('welcome');
    });
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function(){
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::post('/authenticate',[AuthController::class,'authenticate'])->name('auth');

});
