<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengajarController extends Controller
{
    //
    public function daftarPengajar() {
        return "Form Pendaftaran Pengajar Mahasisa";
    }
    public function tabelPengajar() {
        return "Tabel Data Pengajar Mahasisa";
    }
    public function blogPengajar() {
        return "Halaman Blog Mahasiswa";
    }
}
