<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\ResourceControl;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/latihan-route-view', 'create');

Route::get('/latihan/{id}/{id1}', [LatihanController::class,'index']);


// Route::prefix('latihan')->group(function(){
//     Route::get('/create', [LatihanController::class,'create'])->name('create');
//     Route::post('/store/{id}', [LatihanController::class,'store'])->name('store');
//     Route::put('/update', [LatihanController::class,'update']);
//     Route::delete('/delete', [LatihanController::class, 'delete'])->name('delete');
// });

Route::group(['prefix' => 'latihan'], function(){
    Route::get('/create', [LatihanController::class,'create'])->name('create');
    Route::post('/store/{id1}/{id2}/{id3}', [LatihanController::class,'store'])->name('store');
    Route::put('/update', [LatihanController::class,'update']);
    Route::delete('/delete', [LatihanController::class, 'delete'])->name('delete');
});

// Route::name('category.')->group(function () {
//     Route::get('/users', function () {})->name('users');
//     Route::post('/store/{id}', [LatihanController::class,'store'])->name('store');
//     Route::put('/update', [LatihanController::class,'update']);
//     Route::delete('/delete', [LatihanController::class, 'delete'])->name('delete');
// });

// Route::redirect('/home', 'latihan/create', 301);
Route::view('/welcome', 'welcome', ['name' => 'Rama']);

Route::get('/tes/{nama}/{ttl}', [LatihanController::class,'tes'])->name('tes.get');

Route::get('/belajar',[BelajarController::class,'store']);
Route::resource('/resource-controller',ResourceControl::class);
