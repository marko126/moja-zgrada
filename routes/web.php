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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->prefix('admin')->group(function() {
    
    Route::get('', function() {
        return redirect()->route('admin.dashboard');
    });
    
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
    
    //Building
    
    Route::get('/building', 'Admin\BuildingController@index')->name('admin.building.index');
    
    Route::get('/building/add', 'Admin\BuildingController@add')->name('admin.building.add');
    Route::post('/building/add', 'Admin\BuildingController@create')->name('admin.building.create');
    
    Route::get('/building/edit/{id}', 'Admin\BuildingController@edit')->name('admin.building.edit');
    Route::post('/building/update/{id}', 'Admin\BuildingController@update')->name('admin.building.update');
    
    Route::post('/building/delete', 'Admin\BuildingController@delete')->name('admin.building.delete');
    
});