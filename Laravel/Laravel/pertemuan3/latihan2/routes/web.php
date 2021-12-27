<?php

use GuzzleHttp\Promise\Create;
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

Route::match(['get','post'],'/home', function () {
    return view('welcome');
});
Route::any('/home-test', function () {
    return view('home');
});
Route::get('/home/{id}/name/{name}', function ($id, $name) {
    return " ini home " . $name . " dengan id " . $id; 
});
Route::get('/home2/{name?}/{id?}', function ($id = 0, $name = "orang") {
    return " ini home " . $name . " dengan id " .$id; 
});
Route::get('/thisisanamazinglongrouteurl/withname/wicanmake/itsimple',function(){
    return "Named Route";
})->name("panjang");

// Route::get('/user',function(){
//     return "Show user";
// });
// Route::get('/user',function(){
//     return "Create user";
// });

Route::prefix('/user')->name('user.')->group(function(){

    Route::get('/',function(){
        return view('user');
    });
   
    Route::get('/show',function(){
        return "Show User";
    })->name('show');
   
    Route::get('/create',function(){
        return "Create User";
    })->name('create');

});