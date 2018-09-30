<?php

namespace App\Http\Controllers;

use App\Trap;
use Illuminate\Http\Request;
use App\Base as BaseModel;

class Base extends Controller
{

    public function index(Request $request) {
        $isBaseDetail = (\Request::get('b') !== null);
        if ($isBaseDetail) {
            $bases = BaseModel
                ::where('identifier', '=', \Request::get('b'))
                ->get();
        }
        else {
            $bases = BaseModel::all();
        }

        $maps = [];

        foreach ($bases as $base) {
            $maps[] = [
                'identifier' => $base->identifier,
                'blocks' => str_split(str_replace(',', '', $base->map)),
                'hasPlatform' => $base->hasPlatform,
                'hasDoublePlatform' => $base->hasDoublePlatform,
                'hasGravity' => $base->hasGravity,
                'hasTrampoline' => $base->hasTrampoline,
                'isVisible' => true,
            ];
        }

        if (empty ($maps)) {
            return redirect()->route('home');
        }

        $layouts = [];
        foreach (\App\Layout::whereBaseIdentifier(\Request::get('b'))->get() as $layout) {
            $layout->design_picture = asset($layout->design_picture);
            $layout->design_solution = asset($layout->design_solution);
            $layouts[] = $layout;
        }

        return view('content-base', [
            'maps' => json_encode($maps),
            'detail' => $isBaseDetail,
            'traps' => Trap::get(['name'])->pluck('name'),
            'layouts' => json_encode($layouts),
            'form' => [
                'base_identifier' => 'hidden',
                'Trap 1' => 'select',
                'Trap 2' => 'text',
                'Trap 3' => 'text',
                'Edit mode image' => 'file',
                'Solution video' => 'file',
                'Comment' => 'textarea',
            ],
        ]);
    }

}
