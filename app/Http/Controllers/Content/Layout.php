<?php

namespace App\Http\Controllers;

use App\Trap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class Layout extends Controller
{

    public function store(Request $request) {

        $validator = $request->validate([
            'base_identifier' => 'required|integer', // Hidden in form
            'trap1' => 'required|string',
            'trap2' => 'required|string',
            'trap3' => 'required|string',
            'edit_mode_image' => 'required|image',
            'solution_video' => 'required|file',
            'comment' => 'string|nullable',
        ]);
        $exceptions = [];

        $imageName = '';
        $videoName = '';
        if ($request->hasFile('edit_mode_image')) {
            try {
                $file = $request->file('edit_mode_image');
                $imageName = 'layout_' . Auth::user()->username . '_' . date('Y-m-dHis_v') . '_edit.' . $file->getClientOriginalExtension();
                $request->file('edit_mode_image')->move(public_path('storage/layouts'), $imageName);
            }
            catch (\Exception $error) {
                $exceptions[] = $error;
            }
        }

        if ($request->hasFile('solution_video')) {
            try {
                $file = $request->file('solution_video');
                $videoName = 'layout_' . Auth::user()->username . '_' . date('Y-m-dHis_v') . '_solution.' . $file->getClientOriginalExtension();
                $request->file('solution_video')->move(public_path('storage/layouts'), $videoName);
            }
            catch (\Exception $error) {
                $exceptions[] = $error;
            }
        }

        if (empty($exceptions)) {
            $trapNames = [
                'trap1' => str_replace('_', ' ', title_case($request->input('trap1'))),
                'trap2' => str_replace('_', ' ', title_case($request->input('trap2'))),
                'trap3' => str_replace('_', ' ', title_case($request->input('trap3')))
            ];
            \App\Layout::create([
                'base_identifier' => $request->input('base_identifier'),
                'trap_1_identifier' => Trap::whereName($trapNames['trap1'])->first()->identifier,
                'trap_2_identifier' => Trap::whereName($trapNames['trap2'])->first()->identifier,
                'trap_3_identifier' => Trap::whereName($trapNames['trap3'])->first()->identifier,
                'design_picture' => $imageName,
                'design_solution' => $videoName,
                'design_comment' => $request->input('design_comment')
            ]);
        }

        return redirect()->back()->withInput()->with('successfulUpload', 'File uploaded successfully!');
    }

}
