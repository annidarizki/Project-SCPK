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

//Route CRUD identitas Pendamping
Route::get('/identitas','IdentitasController@index');

Route::get('/identitas/tambah','IdentitasController@tambah');
Route::post('/identitas/store','IdentitasController@store');

Route::get('/identitas/edit/{id}','IdentitasController@edit');
Route::post('/identitas/update','IdentitasController@update');

Route::get('identitas/hapus/{id}','IdentitasController@hapus');

//Route Identitas Kader
Route::get('/idkader','IdKaderController@indexkader');

Route::get('/idkader/tambahkader','IdKaderController@tambahkader');
Route::post('/idkader/storekader','IdKaderController@storekader');

Route::get('/idkader/editkader/{id}','IdKaderController@editkader');
Route::post('/idkader/updatekader','IdkaderController@updatekader');

Route::get('idkader/hapuskader/{id}','IdKaderController@hapuskader');

//Route Identitas Lansia
Route::get('/idlansia','IdLansiaController@indexlansia');

Route::get('/idlansia/tambahlansia','IdLansiaController@tambahlansia');
Route::post('/idlansia/storelansia','IdLansiaController@storelansia');

Route::get('/idlansia/editlansia/{id}','IdLansiaController@editlansia');
Route::post('/idlansia/updatelansia','IdLansiaController@updatelansia');

Route::get('idlansia/hapuslansia/{id}','IdLansiaController@hapuslansia');



