<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProdukController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pasien',[PasienController::class, 'index'])->name('pasien');
Route::get('/pasiencreate',[PasienController::class, 'pasiencreate'])->name('pasiencreate');
Route::post('/insertdata',[PasienController::class, 'insertdata'])->name('insertdata');
Route::get('/tampilkanpasien',[PasienController::class, 'tampilkanpasien'])->name('tampilkanpasien');
// Route::get('/pasiendetail',[PasienController::class, 'pasiendetail'])->name('pasiendetail');
Route::get('/delete/{id}',[PasienController::class, 'delete'])->name('delete');



