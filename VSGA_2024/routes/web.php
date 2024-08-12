<?php

use App\Http\Controllers\CRUDPhoto;
use App\Http\Controllers\halloController;
use App\Http\Controllers\pageControllerSatu;
use App\Http\Controllers\pengajarController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\welcomeController;
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

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/hello', function () {
//     return "Hello VSGA";
// });

// Route::get('/world', function () {
//     return "Hello World";
// });

// Route::get('/about', function () {
//     return "NIM : 2231740033 <br>
//         Nama : Fendi Zulkarnain";
// });

// Route::get("/user/{name}", function ($name) {
//     return 'Nama Saya ' . $name;
// });

// Route::get('/posts/{post}/{comment}', function ($post, $comment) {
//     return 'Pos ke-' . $post . '<br>Komentar ke-' . $comment;
// });

// Route::get('/user/{name?}', function ($name = null) {
//     return 'Nama Saya ' . $name;
// });

// Route::get('kodebarang/{jenis?}/{merek?}', function ($jb = 'K01', $mb = 'Nokia') {
//     return "Kode Barang $jb dan Nama Barang $mb";
// });

// Route::get('about', function() {
//     return view('about');
// })->name('about');

// Route::get('tampil', function() {
//     return view('tampil');
// })->name('tampil');

// Route::get('/pesandisini', function() {
//     return "<h1>Pesan Disini</h1>";
// });

// Route::redirect('/contact-us', 'pesandisini');

// Route::get('/polinema/dosen', function() {
//     return "<h1> Daftar Nama Dosen</h1>";
// });

// Route::get('/polinema/tendik', function() {
//     return "<h1> Daftar Nama Tendik</h1>";
// });

// Route::get('/polinema/jurusan', function() {
//     return "<h1> Daftar Nama Jurusan</h1>";
// });

// Route::prefix('/polinema')->group(function() {
//     Route::get('/dosen', function() {
//         echo "<h1> Daftar Dosen</h1>";
//     });
    
//     Route::get('/tendik', function() {
//         echo "<h1> Daftar Tendik</h1>";
//     });
    
//     Route::get('/jurusan', function() {
//         echo "<h1> Daftar Jurusan</h1>";
//     });
// });

// Route::prefix('/admin')->group(function() {
//     Route::get('/dosen', function() {
//         echo "<h1> Daftar Dosen</h1>";
//     });
    
//     Route::get('/tendik', function() {
//         echo "<h1> Daftar Tendik</h1>";
//     });
    
//     Route::get('/jurusan', function() {
//         echo "<h1> Daftar Jurusan</h1>";
//     });
// });

Route::fallback(function() {
    return "Maaf, alamat ini tidak ditemukan";
});

// Route::get('/daftar-dosen', [pengajarController::class, 'daftarPengajar']);
// Route::get('/tabel-pengajar', [pengajarController::class, 'tabelPengajar']);
// Route::get('/blog-pengajar', [pengajarController::class, 'blogPengajar']);

// Route::get('/pasar-buah', [pageControllerSatu::class, 'satu']);

// Route::resource('crud', CRUDController::class);

// Route::resource('photos', CRUDPhoto::class)->only([
//     'index',
//     'show'
// ]);

// Route::resource('photos', CRUDPhoto::class)->except([
//     'create',
//     'store',
//     'update',
//     'destroy'
// ]);

// Route::get('selamat', function() {
//     return view('Hello', ['name' => 'Fendi']);
// });

// Route::get('/greeting', [
//     welcomeController:: class,
//     'greeting'
// ]);

Route::get('/hello', [
    halloController::class,
    'greeting'
]);