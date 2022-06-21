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
Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');
Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian');
Route::get('/mahasiswa/formmahasiswa', 'MahasiswaController@formmahasiswa');
Route::post('/mahasiswa/simpanmahasiswa' ,'MahasiswaController@simpanmahasiswa');
Route::get('/mahasiswa/editmahasiswa/{id}', 'MahasiswaController@editmahasiswa');
Route::put('/mahasiswa/updatemahasiswa/{id}', 'MahasiswaController@updatemahasiswa');
Route::get('/mahasiswa/deletemahasiswa/{id}', 'MahasiswaController@deletemahasiswa');

Route::get('/user', 'AuthController@user');
Route::get('/user/formuser', 'AuthController@formuser');
Route::post('/user/simpanuser' ,'AuthController@simpanuser');

Route::get('/login', 'AuthController@login');

Route::post('/user/ceklogin', 'AuthController@ceklogin');

Route::get('/logout', 'AuthController@logout');
