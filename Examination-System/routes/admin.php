<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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




Route::group(['namespace'=>'backend' ,
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

Route::get('/dashboard' , 'DashboardController@index')->name('dashboard.index');
Route::get('/dashboard/users/index' , 'UserController@index')->name('users.index');
Route::get('/dashboard/users/create' , 'UserController@create')->name('users.create');

Route::resource('dashboard/educational-stages' , 'StageController');
Route::resource('dashboard/questions' , 'questionController');
Route::resource('dashboard/roles', 'RoleController');
});


Auth::routes();

