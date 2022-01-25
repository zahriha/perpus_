<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Anggota2Controller;
use App\Http\Controllers\RakController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UserController;


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

//Route::get('/', function () {
  ///return view('index');
//})->middleware('auth');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/')->middleware('auth');


//Petugas
Route::get('/addPetugas', [PetugasController::class,'index'])->middleware('auth');
Route::get('/createPetugas', [PetugasController::class, 'create'])->middleware('auth');
Route::post('/storePetugas', [PetugasController::class, 'store'])->middleware('auth');
Route::get('/showPetugas/{id}', [PetugasController::class, 'show'])->middleware('auth');
Route::post('/update/{id}', [PetugasController::class, 'update'])->middleware('auth');
Route::get('/destroy/{id}', [PetugasController::class, 'destroy'])->middleware('auth');

//Buku
Route::get('/addBuku', [BukuController::class,'index'])->middleware('auth');
Route::get('/createBuku', [BukuController::class, 'create'])->middleware('auth');
Route::post('/storeBuku', [BukuController::class, 'store'])->middleware('auth');
Route::get('/showBuku/{id}', [BukuController::class, 'show'])->middleware('auth');
Route::post('/update/{id}', [BukuController::class, 'update'])->middleware('auth');
Route::get('/destroy/{id}', [BukuController::class, 'destroy'])->middleware('auth');


//Anggota
Route::get('/addAnggota', [Anggota2Controller::class,'index'])->middleware('auth');
Route::get('/createAnggota', [Anggota2Controller::class, 'create'])->middleware('auth');
Route::post('/storeAnggota', [Anggota2Controller::class, 'store'])->middleware('auth');
Route::get('/showAnggota/{id}', [Anggota2Controller::class, 'show'])->middleware('auth');
Route::post('/update/{id}', [Anggota2Controller::class, 'update'])->middleware('auth');
Route::get('/destroy/{id}', [Anggota2Controller::class, 'destroy'])->middleware('auth');

//Rak
Route::get('/addRak', [RakController::class,'index'])->middleware('auth');
Route::get('/createRak', [RakController::class, 'create'])->middleware('auth');
Route::post('/storeRak', [RakController::class, 'store'])->middleware('auth');
Route::get('/showRak/{id}', [RakController::class, 'show'])->middleware('auth');
Route::post('/update/{id}', [RakController::class, 'update'])->middleware('auth');
Route::get('/destroy/{id}', [RakController::class, 'destroy'])->middleware('auth');

//Peminjaman
Route::get('/addPeminjaman', [PeminjamanController::class,'index'])->middleware('auth');
Route::get('/createPeminjaman', [PeminjamanController::class, 'create'])->middleware('auth');
Route::post('/storePeminjaman', [PeminjamanController::class, 'store'])->middleware('auth');
Route::get('/showPeminjaman/{id}', [PeminjamanController::class, 'show'])->middleware('auth');
Route::post('/update/{id}', [PeminjamanController::class, 'update'])->middleware('auth');
//Route::get('/destroy/{id}', [PeminjamanController::class, 'destroy'])->middleware('auth');

Route::get('/cetak','App\Http\Controllers\PeminjamanController@cetakdata')->name('cetak');
Route::get('/destroy/{id}','App\Http\Controllers\PeminjamanController@destroy');


//User
Route::get('/addUser', [UserController::class,'index'])->middleware('auth');
Route::get('/createUser', [UserController::class, 'create'])->middleware('auth');
Route::post('/storeUser', [UserController::class, 'store'])->middleware('auth');
Route::get('/showUser/{id}', [UserController::class, 'show'])->middleware('auth');
//Route::post('/update/{id}', [UserController::class, 'update'])->middleware('auth');
//Route::get('/destroy/{id}', [UserController::class, 'destroy'])->middleware('auth');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
