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
})->middleware('auth');

//Petugas
Route::get('/addPetugas', [PetugasController::class,'index'])->middleware('auth');;
Route::get('/createPetugas', [PetugasController::class, 'create'])->middleware('auth');;
Route::post('/storePetugas', [PetugasController::class, 'store'])->middleware('auth');;
Route::get('/showPetugas/{id}', [PetugasController::class, 'show'])->middleware('auth');;
Route::post('/update/{id}', [PetugasController::class, 'update'])->middleware('auth');;
Route::get('/destroy/{id}', [PetugasController::class, 'destroy'])->middleware('auth');;

//Buku
Route::get('/addBuku', [BukuController::class,'index'])->middleware('auth');;
Route::get('/createBuku', [BukuController::class, 'create'])->middleware('auth');;
Route::post('/storeBuku', [BukuController::class, 'store'])->middleware('auth');;
Route::get('/showBuku/{id}', [BukuController::class, 'show'])->middleware('auth');;
Route::post('/update/{id}', [BukuController::class, 'update'])->middleware('auth');;
Route::get('/destroy/{id}', [BukuController::class, 'destroy'])->middleware('auth');;

//Anggota
Route::get('/addAnggota', [AnggotaController::class,'index'])->middleware('auth');;
Route::get('/createAnggota', [AnggotaController::class, 'create'])->middleware('auth');;
Route::post('/storeAnggota', [AnggotaController::class, 'store'])->middleware('auth');;
Route::get('/showAnggota/{id}', [AnggotaController::class, 'show'])->middleware('auth');;
Route::post('/update/{id}', [AnggotaController::class, 'update'])->middleware('auth');;
Route::get('/destroy/{id}', [AnggotaController::class, 'destroy'])->middleware('auth');;

//Rak
Route::get('/addRak', [RakController::class,'index'])->middleware('auth');;
Route::get('/createRak', [RakController::class, 'create'])->middleware('auth');;
Route::post('/storeRak', [RakController::class, 'store'])->middleware('auth');;
Route::get('/showRak/{id}', [RakController::class, 'show'])->middleware('auth');;
Route::post('/update/{id}', [RakController::class, 'update'])->middleware('auth');;
Route::get('/destroy/{id}', [RakController::class, 'destroy'])->middleware('auth');;

//Peminjaman
Route::get('/addPeminjaman', [PeminjamanController::class,'index'])->middleware('auth');;
Route::get('/createPeminjaman', [PeminjamanController::class, 'create'])->middleware('auth');
Route::post('/storePeminjaman', [PeminjamanController::class, 'store'])->middleware('auth');;
Route::get('/showPeminjaman/{id}', [PeminjamanController::class, 'show'])->middleware('auth');;
Route::post('/update/{id}', [PeminjamanController::class, 'update'])->middleware('auth');;
Route::get('/destroy/{id}', [PeminjamanController::class, 'destroy'])->middleware('auth');;



Auth::routes();

///Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
