<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
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

 Route::get('/about', function () {
     return view('v_about');
 });

Route::view('/about','about');

Route::get('/home',[HalamanController::class, "index"]);
Route::get('/home/about',[HalamanController::class, "about"]);
Route::get('/guru',[HalamanController::class,"guru"]);
Route::view('/index','index',);
Route::get('/santri',[HalamanController::class,"santri"]);
Route::get('/contact',[HalamanController::class,"contact"]);
