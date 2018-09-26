<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Layout extends Controller
{

    public function store(Request $request) {
        $validator = $request->validate([
            'trap1' => 'required|string',
            'trap2' => 'required|string',
            'trap3' => 'required|string',
            'edit_mode_image' => 'required|image',
            'solution_video' => 'required',
        ]);

        dd($request->all());
    }

}
