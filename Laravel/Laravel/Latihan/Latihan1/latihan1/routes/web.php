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



// ini acces grup menggunakan middleware
Route::group(['middleware'=>['protectedPage']],function () {
    Route::view('home','home');
    Route::view('users','users');
    Route::view('contact','contact');
    Route::view('product','product');

// Route::get('/', function () {
//     return view('welcome');
// });
});

// optional parameters
Route::get('/post/{id?}',function($id){
    return "masukan angka =  ".$id;
});

// akses menggunakan prefix
Route::group(["prefix"=>"admin"], function(){
    Route::get("/users", [HalamanController::class,'users']);
    Route::get("/home", [HalamanController::class,'home']);

});
// akses menggunakan named route
Route::get('/admin/product',[HalamanController::class,'product'])->name('product');
