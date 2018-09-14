<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Base extends Controller
{

    public function index() {
        $bases = \App\Base::all();
        $maps = [];
        foreach ($bases as $base) {
            $maps[] = [
                'identifier' => $base->identifier,
                'blocks' => str_split(str_replace(',', '', $base->map))
            ];
        }
        //JavaScript::put(['maps' => $maps]);
        return view('content-base', ['maps' => $maps]);
    }
}
