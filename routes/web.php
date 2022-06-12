<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\userController;
use App\Http\Controllers\vanderCodeController;
use App\Http\Controllers\adminController;
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

// authentication
Route::get('/masuk', [authController::class, 'login'])->name('login');
Route::post('/masuk-proses', [authController::class, 'loginStore'])->name('loginStore');
Route::get('logout', [authController::class, 'logout'])->name('logout');


// umum
Route::get('/', [vanderCodeController::class, 'beranda'])->name('beranda')->middleware('auth');



// user area
Route::group(['middleware' => ['auth', 'akses:user']], function(){
    Route::get('/user-kontrol', [userController::class, 'user'])->name('user');

    // input poin siswa
    Route::get('/input-poin', [userController::class, 'inputPoin'])->name('inputPoin');
    Route::post('/input-/{id_dataSiswa}/proses', [userController::class, 'inputPoinStore'])->name('inputPoinStore');

});



// admin area
Route::group(['middleware' => ['auth', 'akses:admin']], function(){
    Route::get('/admin-kontrol', [adminController::class, 'admin'])->name('admin');
    
    Route::get('/admin-kontrol/tambah-jurusan', [adminController::class, 'tambahjurusan'])->name('tambahjurusan');
    Route::post('/admin-kontrol/tambah-jurusan/proses', [adminController::class, 'tambahjurusanStore'])->name('tambahjurusanStore');
    
    Route::get('/admin-kontrol/data-siswa/{id}', [adminController::class, 'dataSiswa'])->name('dataSiswa');
    
    // tambah data siswa
    Route::get('/admin-kontrol/data-siswa/{id}/tambah-data-siswa/', [adminController::class, 'tambahDataSiswa'])->name('tambahDataSiswa');
    Route::post('/admin-kontrol/data-siswa/{id}/tambah-data-siswa/proses', [adminController::class, 'tambahDataSiswaStore'])->name('tambahDataSiswaStore');
    
    // hapus data siswa
    Route::get('/admin-kontrol/data-siswa/hapus/{id_dataSiswa}', [adminController::class, 'hapusDataSiswa'])->name('hapusDataSiswa');
    
    // ubah data siswa
    Route::get('/admin-kontrol/data-siswa/{id}/ubah/{id_dataSiswa}', [adminController::class, 'ubahDataSiswa'])->name('ubahDataSiswa');
    Route::post('/admin-kontrol/data-siswa/{id}/ubah/{id_dataSiswa}/proses', [adminController::class, 'ubahDataSiswaStore'])->name('ubahDataSiswaStore');
    
    // hapus data perjurusan
    Route::get('/admin-kontrol/hapus-data-perjurusan/{id}', [adminController::class, 'hapusDataJurusan'])->name('hapusDataJurusan');

    // ubah data jurusan
    Route::get('/admin-kontrol/ubah-data-jurusan/{id}', [adminController::class, 'ubahDataJurusan'])->name('ubahDataJurusan');

});


