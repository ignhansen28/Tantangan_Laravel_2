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

Route::get('/', 'EmployeeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'auth'], function() {
    Route::get('/create/employee', 'EmployeeController@create')->name('employee.create');
    Route::post('/employee', 'EmployeeController@store')->name('employee.store');
    Route::get('/create/company', 'CompanyController@create')->name('company.create');
    Route::post('/company', 'CompanyController@store')->name('company.store');
    Route::get('/employee/{id}/edit', 'EmployeeController@edit')->name('employee.edit');
    Route::post('/employee/{id}/update', 'EmployeeController@update')->name('employee.update');
    Route::get('/employee/{id}/delete', 'EmployeeController@delete')->name('employee.delete');
});