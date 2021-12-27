<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StatusDeliveryController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FatraController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\StatusPickupController;
use App\Http\Controllers\UnitController;
use App\Models\Branch;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('note',[NoteController::class,'index'])->name('note');
Route::get('massage',[MassageController::class,'index'])->name('massage');
Route::get('delivery',[DeliveryController::class,'index'])->name('delivery');
Route::get('history',[ReportController::class,'history'])->name('history');
Route::get('income',[ReportController::class,'income'])->name('income');

Route::get('item',[ItemController::class,'index'])->name('item');
Route::post('item/store',[ItemController::class,'store'])->name('item-store');
Route::get('item/edit/{id}',[ItemController::class,'edit'])->name('item-edit');
Route::post('item/edit/{id}',[ItemController::class,'update'])->name('item-update');
Route::delete('item/delete/{id}',[ItemController::class,'destroy'])->name('item-delete');

Route::get('unit',[UnitController::class,'index'])->name('unit');
Route::post('unit/store',[UnitController::class,'store'])->name('unit-store');
Route::get('unit/edit/{id}',[UnitController::class,'edit'])->name('unit-edit');
Route::post('unit/edit/{id}',[UnitController::class,'update'])->name('unit-update');
Route::delete('unit/delete/{id}',[UnitController::class,'destroy'])->name('unit-delete');

Route::get('size',[SizeController::class,'index'])->name('size');
Route::post('size/store',[SizeController::class,'store'])->name('size-store');
Route::get('size/edit/{id}',[SizeController::class,'edit'])->name('size-edit');
Route::post('size/edit/{id}',[SizeController::class,'update'])->name('size-update');
Route::delete('size/delete/{id}',[SizeController::class,'destroy'])->name('size-delete');

Route::get('payment',[PaymentController::class,'index'])->name('payment');
Route::post('payment/store',[PaymentController::class,'store'])->name('payment-store');
Route::get('payment/edit/{id}',[PaymentController::class,'edit'])->name('payment-edit');
Route::post('payment/edit/{id}',[PaymentController::class,'update'])->name('payment-update');
Route::delete('payment/delete/{id}',[PaymentController::class,'destroy'])->name('payment-delete');

Route::get('branch',[BranchController::class,'index'])->name('branch');
Route::post('branch/store',[BranchController::class,'store'])->name('branch-store');
Route::get('branch/store',[BranchController::class,'create'])->name('branch-contoh');
Route::get('branch/edit/{id}',[BranchController::class,'edit'])->name('branch-edit');
Route::post('branch/edit/{id}',[BranchController::class,'update'])->name('branch-update');
Route::delete('branch/delete/{id}',[BranchController::class,'destroy'])->name('branch-delete');

Route::get('shipment',[ShipmentController::class,'index'])->name('shipment');
Route::post('shipment/store',[ShipmentController::class,'store'])->name('shipment-store');
Route::get('shipment/edit/{id}',[ShipmentController::class,'edit'])->name('shipment-edit');
Route::post('shipment/edit/{id}',[ShipmentController::class,'update'])->name('shipment-update');
Route::delete('shipment/delete/{id}',[ShipmentController::class,'destroy'])->name('shipment-delete');

Route::get('status_delivery',[StatusDeliveryController::class,'index'])->name('status_delivery');
Route::post('status_delivery/store',[StatusDeliveryController::class,'store'])->name('status_delivery-store');
Route::get('status_delivery/edit/{id}',[StatusDeliveryController::class,'edit'])->name('status_delivery-edit');
Route::post('status_delivery/edit/{id}',[StatusDeliveryController::class,'update'])->name('status_delivery-update');
Route::delete('status_delivery/delete/{id}',[StatusDeliveryController::class,'destroy'])->name('status_delivery-delete');

Route::get('status_pickup',[StatusPickupController::class,'index'])->name('status_pickup');
Route::post('status_pickup/store',[StatusPickupController::class,'store'])->name('status_pickup-store');
Route::get('status_pickup/edit/{id}',[StatusPickupController::class,'edit'])->name('status_pickup-edit');
Route::post('status_pickup/edit/{id}',[StatusPickupController::class,'update'])->name('status_pickup-update');
Route::delete('status_pickup/delete/{id}',[StatusPickupController::class,'destroy'])->name('status_pickup-delete');

Route::get('rate',[RateController::class,'index'])->name('rate');
Route::get('employee',[EmployeeController::class,'index'])->name('employee');
Route::get('admin',[AdminController::class,'index'])->name('admin');