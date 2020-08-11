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
    return view('dashboard');
})->middleware('auth');

Route::get('/fhs','FinancialHealthSurveyController@index')->name('fhs');

Route::post('/updateAnswer', 'FinancialHealthSurveyController@updateAnswer')->name('update.answer');

Route::get('/graph',function(){
    return view('graph');
})->name('graph');

Auth::routes();
