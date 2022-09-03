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


Route::get('/matkul', [App\Http\Controllers\MatakuliahController::class, 'index'])->name('matkul');
Route::get('/matkul/tambah', [App\Http\Controllers\MatakuliahController::class, 'create'])->name('matkul.tambah');
Route::get('/akademik', [App\Http\Controllers\AkademikController::class, 'index'])->name('akademik');
Route::get('/akademik/tambahh', [App\Http\Controllers\AkademikController::class, 'create'])->name('akademik.tambahh');
Route::PUT('/matkul/store', [App\Http\Controllers\MatakuliahController::class, 'store'])->name('matkul.store');
Route::PUT('/akademik/store', [App\Http\Controllers\AkademikController::class, 'store'])->name('akademik.store');
Route::get('/akademik/hapus/{id_mhs}', [App\Http\Controllers\AkademikController::class, 'destroy'])->name('akademik.hapus');
Route::get('/matkul/hapus/{id_matkul}', [App\Http\Controllers\MatakuliahController::class, 'destroy'])->name('matkul.hapus');
Route::get('/akademik/edit/{id_mhs}', [App\Http\Controllers\AkademikController::class, 'edit'])->name('akademik.edit');
Route::PUT('/akademik/update/{id_mhs}', [App\Http\Controllers\AkademikController::class, 'update'])->name('akademik.update');
Route::get('/matkul/edit/{id_matkul}', [App\Http\Controllers\MatakuliahController::class, 'edit'])->name('matkul.edit');
Route::PUT('/matkul/update/{id_matkul}', [App\Http\Controllers\MatakuliahController::class, 'update'])->name('matkul.update');
Route::get('/', function () {
    return view('welcome');
});
