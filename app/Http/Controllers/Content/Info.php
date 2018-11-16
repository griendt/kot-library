<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Info extends Controller
{
    public function index(Request $request) {
        return view('content-info');
    }
}
