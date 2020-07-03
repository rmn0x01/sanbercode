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

Route::get('/pertanyaan', 'PertanyaanController@index')->name('pertanyaan_index');
Route::get('/pertanyaan/create', 'PertanyaanController@create')->name('pertanyaan_create');
Route::get('/pertanyaan/{id}','PertanyaanController@detail')->name('pertanyaan_detail');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit')->name('pertanyaan_edit');
Route::post('/pertanyaan/editProcess','PertanyaanController@editProcess')->name('pertanyaan_editprocess');
Route::get('/pertanyaan/{id}/delete','PertanyaanController@delete')->name('pertanyaan_delete');

Route::post('/pertanyaan', 'PertanyaanController@store')->name('pertanyaan_store');

Route::post('/jawaban/{id}', 'JawabanController@store')->name('jawaban_store');
Route::get('/jawaban','JawabanController@index')->name('jawaban_index');
Route::get('/jawaban/{id}', 'JawabanController@detail')->name('jawaban_detail');