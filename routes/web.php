<?php

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
Route::resource('Customer','CustomerController');
Route::resource('Supplier','SupplierController');
Route::resource('Employee','EmployeeController');
Route::resource('Layout','LayoutController');