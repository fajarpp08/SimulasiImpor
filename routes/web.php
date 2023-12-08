<?php

use App\Http\Controllers\ImporController;
use App\Http\Controllers\SimulasiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/data-impor', [ImporController::class, 'index']);
// Route::post('create-impor', [ImporController::class, 'create']);
// Route::resource('impor', ImporController::class);

Route::get('/input-form', [SimulasiController::class, 'inputForm']);
Route::post('/simulasi', [SimulasiController::class, 'simulasi'])->name('simulasi');
Route::get('/hasil-simulasi/{id_simulasi}', [SimulasiController::class, 'hasilSimulasi'])->name('hasil_simulasi');
