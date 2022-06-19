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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['cek' => 'home']);
});
Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');
Route::get('/mahasiswa/cari','MahasiswaController@pencarian');
//proses redirect ke halaman form
Route::get('/mahasiswa/formmhs','MahasiswaController@formmhs');
//proses untuk menyimpan data ke tabel mhs pada basis data
Route::post('mahasiswa/simpanmhs', 'MahasiswaController@simpanmhs');

//proses redirect ke halaman form
Route::get('/mahasiswa/editmhs/{id}', 'MahasiswaController@editmhs');

//proses untuk update data ke database
Route::put('mahasiswa/updatemhs/{id}', 'MahasiswaController@updatemhs');

//delete
Route::get('/mahasiswa/hapusmhs/{id}','MahasiswaController@hapusmhs');

Route::get('/user', 'AuthController@user')->middleware('auth');

//add user
Route::get('/user/formuser', 'AuthController@formuser')->middleware('auth'); 

Route::post('/user/simpanuser', 'AuthController@simpanuser')->middleware('auth');

//login
Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');

Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');

//logout
Route::get('/logout', 'AuthController@logout')->middleware('auth');

//deleteuser
Route::get('/user/hapususer/{id}','AuthController@hapususer');

//edituser
Route::get('/user/edituser/{id}', 'AuthController@edituser');
Route::put('/user/updateuser/{id}', 'AuthController@updateuser');