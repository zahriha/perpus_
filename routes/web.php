<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;

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

