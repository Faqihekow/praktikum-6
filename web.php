<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MixController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BukuuController;
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
    return view('welcome');
});

Route::get('/tampil_mahasiswa',function (){
    return view('datamahasiswa');
});

Route::get('/menu_masakan', function () { //tidak boleh ada spasi
    return view('menumasakan');//harus disamakan sama nama file yang ada di resource views
});

Route::get('/daftar_buku',function (){
    return view('daftarbuku');
});


route::get('/databarang', function() {
    return view('databarang');
});
Route::get('/daftar_mahasiswa',[MahasiswaController::class,'index']); //request daftar_mahasiwa, respon fungsi index mahasiswa controler, baru nama fungsinya
    
Route::get('/daftar_buku',[BukuController::class,'buku']);

Route::get('/daftar_barang',[MixController::class,'barang']);

//routing data barang
route::get('/databarang',
    [BarangController::class, 'data_barang']);

Route::get('/menu',[BukuuController::class,'pesanan']);