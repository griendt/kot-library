<?php

namespace App\Http\Controllers;

use App\Trap;
use Illuminate\Http\Request;
use App\Base as BaseModel;

class Info extends Controller
{
    public function index(Request $request) {
        return view('content-info');
    }
}
