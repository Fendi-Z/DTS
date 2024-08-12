<?php

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
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return "Hello VSGA";
});

Route::get('/world', function () {
    return "Hello World";
});

Route::get('/about', function () {
    return "NIM : 2231740033 <br>
        Nama : Fendi Zulkarnain";
});

// Route::get("/user/{name}", function ($name) {
//     return 'Nama Saya ' . $name;
// });

Route::get('/posts/{post}/{comment}', function ($post, $comment) {
    return 'Pos ke-' . $post . '<br>Komentar ke-' . $comment;
});

Route::get('/user/{name?}', function ($name = null) {
    return 'Nama Saya ' . $name;
});

Route::get('kodebarang/{jenis?}/{merek?}', function ($jb = 'K01', $mb = 'Nokia') {
    return "Kode Barang $jb dan Nama Barang $mb";
});

Route::get('about', function() {
    return view('about');
})->name('about');

Route::get('tampil', function() {
    return view('tampil');
})->name('tampil');

Route::get('/pesandisini', function() {
    return "<h1>Pesan Disini</h1>";
});

Route::redirect('/contact-us', 'pesandisini');

Route::get('/polinema/dosen', function() {
    return "<h1> Daftar Nama Dosen</h1>";
});

Route::get('/polinema/tendik', function() {
    return "<h1> Daftar Nama Tendik</h1>";
});

Route::get('/polinema/jurusan', function() {
    return "<h1> Daftar Nama Jurusan</h1>";
});

route::prefix('/polinema')->group(function() {
    Route::get('/dosen', function() {
        echo "<h1> Daftar Dosen</h1>";
    });
    
    Route::get('/tendik', function() {
        echo "<h1> Daftar Tendik</h1>";
    });
    
    Route::get('/jurusan', function() {
        echo "<h1> Daftar Jurusan</h1>";
    });
});

route::prefix('/admin')->group(function() {
    Route::get('/dosen', function() {
        echo "<h1> Daftar Dosen</h1>";
    });
    
    Route::get('/tendik', function() {
        echo "<h1> Daftar Tendik</h1>";
    });
    
    Route::get('/jurusan', function() {
        echo "<h1> Daftar Jurusan</h1>";
    });
});