<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    //
    public function hello() {
        return ('Hello World');
    }

    public function greeting() {
        return view('blog.hello', ['name' => 'Fendi']);
    }
}
