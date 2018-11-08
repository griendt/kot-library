<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class StatsController extends Controller
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
        $layoutCountsByUserName = \App\Layout::select(['uploader_user_name', \DB::raw('count(*) as total')])
            ->groupBy('uploader_user_name')
            ->get()
            ->sortByDesc('total');
        $exploitCountsByUserName = \App\LayoutExploit::select(['uploader_user_name', \DB::raw('count(*) as total')])
            ->groupBy('uploader_user_name')
            ->get()
            ->sortByDesc('total');


        $users = array_merge(
            $layoutCountsByUserName->pluck('uploader_user_name')->toArray(),
            $exploitCountsByUserName->pluck('uploader_user_name')->toArray()
        );

        $totalCountsByUserName = [];
        foreach ($users as $user) {
            $totalCountsByUserName[$user] =
                $layoutCountsByUserName->where('uploader_user_name', '=', $user)->pluck('total')->first() +
                $exploitCountsByUserName->where('uploader_user_name', '=', $user)->pluck('total')->first()
                ;
        }

        arsort($totalCountsByUserName);
        return view('stats', [
            'totalCountsByUsername' => $totalCountsByUserName,
            'layoutCountsByUsername' => $layoutCountsByUserName,
            'exploitCountsByUsername' => $exploitCountsByUserName,
        ]);
    }
}
