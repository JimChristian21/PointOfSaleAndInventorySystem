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

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function() {
	return view('dashboard');
});

Route::namespace('App\Http\Controllers')->name('inventory.')->group(function(){
    Route::resource('/inventory', InventoryController::class);
}); 

Route::namespace('App\Http\Controllers')->name('order.')->group(function(){
    Route::resource('/order', OrderController::class);
}); 

Route::namespace('App\Http\Controllers')->name('customer.')->group(function(){
    Route::resource('/customer', CustomerController::class);
}); 

Route::namespace('App\Http\Controllers')->name('supplier.')->group(function(){
    Route::resource('/supplier', SupplierController::class);
}); 

Route::namespace('App\Http\Controllers')->name('user.')->group(function(){
    Route::resource('/user', UserController::class);
}); 

Route::namespace('App\Http\Controllers')->name('profile.')->group(function(){
    Route::resource('/profile', ProfileController::class);
}); 

Route::GET('/transaction/daily', [App\Http\Controllers\OrderController::class, 'daily'])->name('daily');
Route::GET('/transaction/weekly', [App\Http\Controllers\OrderController::class, 'weekly'])->name('weekly');
Route::GET('/transaction/monthly', [App\Http\Controllers\OrderController::class, 'monthly'])->name('monthly');
Route::POST('/addOrder', [App\Http\Controllers\OrderController::class, 'addOrder'])->name('addOrder');