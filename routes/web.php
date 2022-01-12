<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;

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

Route::get('/home', function () {
  return view('home');
});

Route::get('/', [PetugasController::class,'index']);
Route::get('/create', [PetugasController::class, 'create']);
Route::post('/store', [PetugasController::class, 'store']);
Route::get('/show/{id}', [PetugasController::class, 'show']);
Route::post('/update/{id}', [PetugasController::class, 'update']);
Route::get('/destroy/{id}', [PetugasController::class, 'destroy']);


