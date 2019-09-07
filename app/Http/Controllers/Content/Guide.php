<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Guide extends Controller
{
    public function index(Request $request) {
        return view('content-guides');
    }
}
