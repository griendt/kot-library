<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use App\Trap;
use Illuminate\Http\Request;
use App\Layout as LayoutModel;
use Auth;

class Layout extends Controller
{

    public function delete(Request $request) {
        if (!Auth::user()) {
            return redirect()->back()->withInput()->with('fail', 'You are not authorised to delete this layout!');
        }
        else {
            $layout =  LayoutModel::whereId($request->input('layout_id'))->first();
            if (!$layout) {
                return redirect()->back()->withInput()->with('fail', 'Layout could not be found!');
            }
            $image = public_path($layout->design_picture);
            $video = public_path($layout->design_solution);
            $layout->delete();
            \File::delete([$image, $video]);

            return redirect()->back()->withInput()->with('success', 'Layout was successfully deleted.');
        }
    }

    public function store(Request $request) {

        $validator = $request->validate([
            'base_identifier' => 'required|integer', // Hidden in form
            'trap1' => 'required|string',
            'trap2' => 'required|string',
            'trap3' => 'required|string',
            'edit_mode_image' => 'required|image',
            'solution_you_tube' => 'nullable|string',
            'solution_video' => 'nullable|file',
            'comment' => 'string|nullable',
        ]);

        if (is_null($request->input('solution_you_tube')) && !$request->hasFile('solution_video')) {
            dd($request->all());
            return redirect()->back()->with('fail', 'No video nor YouTube link supplied!');
        }
        if (!$request->hasFile('solution_video') && strpos($request->input('solution_you_tube'), 'youtube') === false && strpos($request->input('solution_you_tube'), 'youtu.be') === false) {
            return redirect()->back()->with('fail', 'Link provided was not a YouTube link!');
        }
        $exceptions = [];

        $imageName = '';
        $videoName = '';
        $videoIsYoutube = false;

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

        if ($request->hasFile('solution_video') && is_null($request->input('solution_you_tube'))) {
            try {
                $file = $request->file('solution_video');
                $videoName = 'layout_' . Auth::user()->username . '_' . date('Y-m-dHis_v') . '_solution.' . $file->getClientOriginalExtension();
                $request->file('solution_video')->move(public_path('storage/layouts'), $videoName);
            }
            catch (\Exception $error) {
                $exceptions[] = $error;
            }
        }
        elseif (!empty($request->input('solution_you_tube'))) {
            $videoName = $request->input('solution_you_tube');
            if (strpos($videoName, '://') === false) {
                $videoName = "https://" . $videoName;
            }
            $videoIsYoutube = true;
        }

        if (empty($exceptions)) {
            $trapNames = [
                'trap1' => str_replace('_', ' ', title_case($request->input('trap1'))),
                'trap2' => str_replace('_', ' ', title_case($request->input('trap2'))),
                'trap3' => str_replace('_', ' ', title_case($request->input('trap3')))
            ];
            LayoutModel::create([
                'base_identifier' => $request->input('base_identifier'),
                'trap_1_identifier' => Trap::whereName($trapNames['trap1'])->first()->identifier,
                'trap_2_identifier' => Trap::whereName($trapNames['trap2'])->first()->identifier,
                'trap_3_identifier' => Trap::whereName($trapNames['trap3'])->first()->identifier,
                'design_picture' => 'storage/layouts/' . $imageName,
                'design_solution' => $videoIsYoutube ? $videoName : 'storage/layouts/' . $videoName,
                'design_comment' => $request->input('comment'),
                'uploader_user_name' => Auth::user()->username,
            ]);
        }

        return redirect()->back()->withInput()->with('success', 'File uploaded successfully!');
    }

}
