<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


// ini memanggil dengan function
Route::get('/', function () {
    return view('home');
});

// ini memanggil tanpa function
Route::view('/about','about');

// ini memanggil tanpa function
Route::view('/admin/add', 'admin.add',[
    'nama' => '<h1>fatra dinata</h1>',
    'umur' => '20'
]);



// ini memanggil tanpa function
Route::view('/admin/delete', 'admin.delete');

// ini memanggil tanpa function
Route::view('/admin/index', 'admin.index');

// ini memanggil tanpa function
Route::view('/admin/santri', 'admin.santri.santri');
    

// ini memanggil tanpa function
Route::view('/admin/santri1', 'admin.santri.santri1');

Route::get('siswa/',function($nama_siswa = 'Hinata Shoyo'){
    return view('siswa',['nama_siswa'=>$nama_siswa]);
});

// Route::get('siswa/{nama_siswa?}',function($nama_siswa){
//     return view('siswa',['nama_siswa'=>$nama_siswa]);
// });

// Route::get('siswa/{nama_siswa}',function($nama_siswa){
//     return view('siswa',['nama_siswa'=>$nama_siswa]);
// });