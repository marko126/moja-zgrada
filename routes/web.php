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
    
    //Buildings
    
    Route::get('/buildings', 'Admin\BuildingsController@index')->name('admin.buildings.index');
    
    Route::get('/buildings/add', 'Admin\BuildingsController@add')->name('admin.buildings.add');
    Route::post('/buildings/add', 'Admin\BuildingsController@create')->name('admin.buildings.create');
    
    Route::get('/buildings/edit/{id}', 'Admin\BuildingsController@edit')->name('admin.buildings.edit');
    Route::post('/buildings/update/{id}', 'Admin\BuildingsController@update')->name('admin.buildings.update');
    
    Route::post('/buildings/delete', 'Admin\BuildingsController@delete')->name('admin.buildings.delete');
    
});