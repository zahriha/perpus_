<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\PeminjamanController;

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
  return view('index');
});

//Petugas
Route::get('/addPetugas', [PetugasController::class,'index']);
Route::get('/createPetugas', [PetugasController::class, 'create']);
Route::post('/storePetugas', [PetugasController::class, 'store']);
Route::get('/showPetugas/{id}', [PetugasController::class, 'show']);
Route::post('/update/{id}', [PetugasController::class, 'update']);
Route::get('/destroy/{id}', [PetugasController::class, 'destroy']);

//Buku
Route::get('/addBuku', [BukuController::class,'index']);
Route::get('/createBuku', [BukuController::class, 'create']);
Route::post('/storeBuku', [BukuController::class, 'store']);
Route::get('/showBuku/{id}', [BukuController::class, 'show']);
Route::post('/update/{id}', [BukuController::class, 'update']);
Route::get('/destroy/{id}', [BukuController::class, 'destroy']);

//Anggota
Route::get('/addAnggota', [AnggotaController::class,'index']);
Route::get('/createAnggota', [AnggotaController::class, 'create']);
Route::post('/storeAnggota', [AnggotaController::class, 'store']);
Route::get('/showAnggota/{id}', [AnggotaController::class, 'show']);
Route::post('/update/{id}', [AnggotaController::class, 'update']);
Route::get('/destroy/{id}', [AnggotaController::class, 'destroy']);

//Rak
Route::get('/addRak', [RakController::class,'index']);
Route::get('/createRak', [RakController::class, 'create']);
Route::post('/storeRak', [RakController::class, 'store']);
Route::get('/showRak/{id}', [RakController::class, 'show']);
Route::post('/update/{id}', [RakController::class, 'update']);
Route::get('/destroy/{id}', [RakController::class, 'destroy']);

//Peminjaman
Route::get('/addPeminjaman', [PeminjamanController::class,'index']);
Route::get('/createPeminjaman', [PeminjamanController::class, 'create']);
Route::post('/storePeminjaman', [PeminjamanController::class, 'store']);
Route::get('/showPeminjaman/{id}', [PeminjamanController::class, 'show']);
Route::post('/update/{id}', [PeminjamanController::class, 'update']);
Route::get('/destroy/{id}', [PeminjamanController::class, 'destroy']);

