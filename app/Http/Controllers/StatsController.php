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
    public function index() {
        $countBases = \App\Base::count();
        $countBasesWithLayouts = \App\Layout::count(\DB::raw('distinct base_identifier'));
        $countBasesWithExploits = \App\LayoutExploit::count(\DB::raw('distinct base_identifier'));

        $countLayoutsByBase = \App\Layout::select(\DB::raw('base_identifier, count(*) as submissions'))
            ->groupBy('base_identifier')
            ->get()
            ->keyBy('base_identifier');
        $countExploitsByBase = \App\LayoutExploit::select(\DB::raw('base_identifier, count(*) as submissions'))
            ->groupBy('base_identifier')
            ->get()
            ->keyBy('base_identifier');

        $countSubmissionsByBase = [];
        foreach (\App\Base::get(['identifier'])->pluck('identifier') as $baseIdentifier) {
            $countSubmissionsByBase[$baseIdentifier] = ($countLayoutsByBase[$baseIdentifier]['submissions'] ?? 0)
                + ($countExploitsByBase[$baseIdentifier]['submissions'] ?? 0);
        }

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
            'baseCount' => $countBases,
            'progressCounts' => [
                'submissionsByBase' => $countSubmissionsByBase,
                'basesWithExploits' => $countBasesWithExploits,
                'basesWithLayouts' => $countBasesWithLayouts,
            ],
            'manyThreshold' => 5,
        ]);
    }
}
