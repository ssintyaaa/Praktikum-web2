<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\EtalaseController;

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

// ini route tampilan untuk admin backend
Route::group(['middleware' => ['auth','peran:admin-staff']], function(){
Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/materi', [MateriController::class, 'index']);
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/pengajar', [PengajarController::class, 'index']);
    Route::get('/peserta', [PesertaController::class, 'index']);
    Route::get('/penjadwalan', [PenjadwalanController::class, 'index']);

    Route::get('/materi/create_materi', [MateriController::class, 'create']);
    Route::post('/materi/store', [MateriController::class, 'store']);
    Route::get('/bimbel/edit_materi/{id}', [MateriController::class, 'edit']);
    Route::post('/bimbel/update_materi/{id}', [MateriController::class, 'update']);
    Route::get('/bimbel/delete_materi/{id}', [MateriController::class, 'destroy']);
    Route::get('/bimbel/detail_materi/{id}', [MateriController::class, 'show']);

    Route::get('/kategori/create_kategori', [KategoriController::class, 'create']);
    Route::post('/kategori/store', [KategoriController::class, 'store']);
    Route::get('/bimbel/edit_kategori/{id}', [KategoriController::class, 'edit']);
    Route::post('/bimbel/update_kategori/{id}', [KategoriController::class, 'update']);
    Route::get('/bimbel/delete_kategori/{id}', [KategoriController::class, 'destroy']);

    Route::get('/pengajar/create_pengajar', [PengajarController::class, 'create']);
    Route::post('/pengajar/store', [PengajarController::class, 'store']);
    Route::get('/bimbel/edit_pengajar/{id}', [PengajarController::class, 'edit']);
    Route::post('/bimbel/update_pengajar/{id}', [PengajarController::class, 'update']);
    Route::get('/bimbel/delete_pengajar/{id}', [PengajarController::class, 'destroy']);
    Route::get('/bimbel/detail_pengajar/{id}', [PengajarController::class, 'show']);


    Route::get('/peserta/create_peserta', [PesertaController::class, 'create']);
    Route::post('/peserta/store', [PesertaController::class, 'store']);
    Route::get('/bimbel/edit_peserta/{id}', [PesertaController::class, 'edit']);
    Route::post('/bimbel/update_peserta/{id}', [PesertaController::class, 'update']);
    Route::get('/bimbel/delete_peserta/{id}', [PesertaController::class, 'destroy']);
    Route::get('/bimbel/detail_peserta/{id}', [PesertaController::class, 'show']);


    Route::get('/penjadwalan/create_jadwal', [PenjadwalanController::class, 'create']);
    Route::post('/penjadwalan/store', [PenjadwalanController::class, 'store']);
    Route::get('/bimbel/edit_jadwal/{id}', [PenjadwalanController::class, 'edit']);
    Route::post('/bimbel/update_jadwal/{id}', [PenjadwalanController::class, 'update']);
    Route::get('/bimbel/delete_jadwal/{id}', [PenjadwalanController::class, 'destroy']);
    Route::get('/bimbel/detail_jadwal/{id}', [PenjadwalanController::class, 'show']);

    }); 
});

// route untuk tampilan frontend
Route::prefix('frontend')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index_frontend']);
    Route::get('/etalase', [MateriController::class, 'etalase']);
    Route::get('/etalase/detail/{id}', [MateriController::class, 'detail_materi']);
    Route::get('/etalase/detail/{id}', [MateriController::class, 'detail'])->name('detail.materi');
   
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
