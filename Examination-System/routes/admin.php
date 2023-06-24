<?php

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

Route::get('/dashboard', function () {
    return view('backend.index');
});


Route::group(['namespace'=>'backend' , 'prefix' => 'dashboard'], function(){
Route::resource('/departments' , 'DepartmentController');
});


Auth::routes();

