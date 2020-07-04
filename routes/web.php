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
    Route::get('/{pertanyaan_id}', 'PertanyaanController@show');
    Route::post('/', 'PertanyaanController@store');
    Route::get('/{pertanyaan_id}/edit', 'PertanyaanController@edit');
    Route::put('/{pertanyaan_id}', 'PertanyaanController@update');
    Route::delete('/{pertanyaan_id}', 'PertanyaanController@destroy');
});
Route::prefix('jawaban')->group(function () {
    Route::get('/{pertanyaan_id}', 'JawabanController@index');
    Route::post('/{pertanyaan_id}', 'JawabanController@store');
});