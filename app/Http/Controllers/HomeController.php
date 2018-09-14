<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = array_reverse(
            array_map(
                function ($file) {
                    return str_replace('.blade.php', '', basename($file));
                }, Storage::disk('resources')->allFiles('views/news/')
            )
        );

        return view('home', [
            'news' => $news
        ]);
    }
}
