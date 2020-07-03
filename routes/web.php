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
    return view('welcome');
});

Route::prefix('pertanyaan')->group(function () {
    Route::get('/', 'PertanyaanController@index');
    Route::get('/create', 'PertanyaanController@create');
    Route::post('/', 'PertanyaanController@store');
});
Route::prefix('jawaban')->group(function () {
    Route::get('/{pertanyaan_id}', 'JawabanController@index');
    Route::post('/{pertanyaan_id}', 'JawabanController@store');
});