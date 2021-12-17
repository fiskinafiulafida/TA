<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KetersediaanController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\KontakMemController;
use App\Http\Controllers\AboutMemController;
use App\Http\Controllers\HomeMemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Http\Request; 

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

// kategori admin
Route::resource('kategori',KategoriController::class);
// about admin
Route::resource('aboutAdmin',AboutController::class);
// kontak admin
Route::resource('kontakAdmin',KontakController::class);
// ketersediaan admin
Route::resource('ketersediaanAdmin',KetersediaanController::class);
// buku admin
Route::resource('bukuAdmin',BukuController::class);
// member admin
Route::resource('memberAdmin',MemberController::class);
// kontak member
Route::resource('kontakMember',KontakMemController::class);
// about member
Route::resource('aboutMember',AboutMemController::class);
// home member
// Route::resource('homeMember',HomeMemController::class);
// halaman kategori member
Route::get('/homeMember', [HomeMemController::class, 'index'])->name('homeMember.index');
Route::get('/homeMember/showPostByCategory/{kategori}', [HomeMemController::class, 'showPostByCategory'])->name('homeMember.showPostByCategory');
Route::get('/homeMember/detailBuku/{id_buku}', [HomeMemController::class, 'detailBuku'])->name('homeMember.detailBuku');

// transaksi peminjaman member
Route::resource('transaksi',TransaksiController::class);
// transaksi admin
Route::resource('peminjamanAdmin',PeminjamanController::class);

// login
Route::post('halLogin',[LoginController::class, 'index'] );
Route::get('halLogin2',[LoginController::class, 'tampilkan'] );

// register
Route::post('halRegister',[RegisterController::class, 'store'] );
Route::get('halRegister2',[RegisterController::class, 'tampilkan'] );


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
