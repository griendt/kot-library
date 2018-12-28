<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Guide extends Controller
{
    public function index(Request $request) {
        return view('content-guides');
    }
}
