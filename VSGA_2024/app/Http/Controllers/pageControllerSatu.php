<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageControllerSatu extends Controller
{
    //
    public function index() {
        return view("Welcome");
    }

    public function satu() {
        // return "Data Pertama";
        $arrBuah = ["Pisang", "Rambutan", "Duku", "Jambu"];
        return view('pasarBuah')->with('pasarBuah', $arrBuah);
    }
}
