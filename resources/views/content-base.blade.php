@extends('layouts.app')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert" alert-dismissible fade show>
            {{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (Session::has('fail'))
        <div class="alert alert-warning" role="alert" alert-dismissible fade show>
            {{ Session::get('fail') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($detail)
        <vue-base style='float: right' :maps="{{ $maps }}"></vue-base>
    @endif
    <div>
        <h2>Bases
        @if ($detail)
            <div class="vr"></div>
            <div style="display: inline"><a href="{{ route('content.base') }}" class="btn-secondary btn">
                <i class="fa fa-arrow-left"></i> Back
            </a></div>
        @endif
        </h2>
    </div>
    Here you can find a collection of all currently known bases with their numbers.<br>
    Use the panel below to filter the set of bases by the blocks and items that are in them.<br>
    Click on a base to view a detailed page.<br>

    <hr />
    @if (isset($maps) && !$detail)
        <vue-big-base></vue-big-base>
        <hr />
        <vue-base :maps="{{ $maps }}"></vue-base>
    @else
        @php
            $defenseForm = [
            'base_identifier' => 'hidden',
            'Trap 1' => 'select',
            'Trap 2' => 'select',
            'Trap 3' => 'select',
            'Edit mode image' => 'file',
            'Solution video' => 'file',
            'Solution YouTube' => 'text',
            'Comment' => 'textarea',
            ];

            $offenseForm = [
            'base_identifier' => 'hidden',
            'Trap 1' => 'select',
            'Trap 2' => 'select',
            'Trap 3' => 'select',
            'Layout screenshot' => 'file',
            'Exploit video' => 'file',
            'Exploit YouTube' => 'text',
            'Exploit comment' => 'textarea',
            ];

            $exploitsCount = count(json_decode($exploits, true));
            $layoutsCount = count(json_decode($layouts, true));
        @endphp
        <tabs>
            <tab label="Exploits ({{ $exploitsCount }})" class="tab-pane fade show">
                @auth
                    @php
                    $optionalTraps = $traps->toArray();
                    array_unshift($optionalTraps, '-');
                    @endphp
                    @include('includes.form', [
                    'border' => 'f2304a',
                    'id' => 'exploitForm',
                    'explanation' => 'An <strong>Exploit</strong> gives information on how to beat a given base and arrangement of traps. This includes clever potion use. Please leave commentary in the comments box explaining how the Exploit works and what to look out for when attempting the Exploit.<br><strong>*</strong> Either upload a video directly to the site, or give a link to a YouTube video. If you use both, only the YouTube link will be used!<hr>',
                    'route' => 'exploit.store',
                    'icons' => 'traps',
                    'header' => 'Upload Exploit',
                    'fields' => $offenseForm,
                    'buttonText' => 'Upload',
                    'hidden' => [
                        'base_identifier' => json_decode($maps, true)[0]['identifier'],
                    ],
                    'selectOptions' => [
                        'Trap 1' => $optionalTraps,
                        'Trap 2' => $optionalTraps,
                        'Trap 3' => $optionalTraps,
                        ]
                    ])
                @else
                    <a href="{{ route('login') }}">Log in</a> or <a href="{{ route('register') }}">register</a> to upload exploits!
                @endauth
                @if (empty(json_decode($exploits)))
                    @include('includes.card', ['header' => 'No uploads yet ', 'detail' => 'No exploits have been uploaded yet!'])
                @endif
                @if (!empty(json_decode($exploits)))
                    <vue-exploit
                            :base_identifier="{{ json_decode($maps, true)[0]['identifier'] }}"
                            :exploits="{{ $exploits }}"
                            :csrf_token="{{ json_encode(csrf_token()) }}"
                            :user_can_delete_exploit="{{ json_encode(is_null(Auth::user()) ? false : Auth::user()->isAdmin()) }}"
                    ></vue-exploit>
                @endif
            </tab>
            <tab label="Layouts ({{ $layoutsCount }})" class="tab-pane fade show">

                    @auth
                        @include('includes.form', [
                        'border' => '1f6fb2',
                        'id' => 'layoutForm',
                        'explanation' => "A <strong>Layout</strong> is an arrangement of traps in a base. It should not show how to defeat such a base through clever use of potions; instead, a Layout shows how to save the arrangement in the first place.<br><strong>*</strong> Either upload a video directly to the site, or give a link to a YouTube video. If you use both, only the YouTube link will be used!<hr>",
                        'route' => 'layout.store',
                        'icons' => 'traps',
                        'header' => 'Upload Layout',
                        'fields' => $defenseForm,
                        'buttonText' => 'Upload',
                        'hidden' => [
                            'base_identifier' => json_decode($maps, true)[0]['identifier'],
                        ],
                        'selectOptions' => [
                            'Trap 1' => $traps,
                            'Trap 2' => $traps,
                            'Trap 3' => $traps,
                            ]
                        ])
                    @else
                        <a href="{{ route('login') }}">Log in</a> or <a href="{{ route('register') }}">register</a> to upload layouts!
                    @endauth
                @if (!empty(json_decode($layouts)))
                    <vue-layout
                        :base_identifier="{{ json_decode($maps, true)[0]['identifier'] }}"
                        :layouts="{{ $layouts }}"
                        :csrf_token="{{ json_encode(csrf_token()) }}"
                        :user_can_delete_layout="{{ json_encode(is_null(Auth::user()) ? false : Auth::user()->isAdmin()) }}"
                        ></vue-layout>
                @else
                    @include('includes.card', ['header' => 'No uploads yet ', 'detail' => 'No layouts have been uploaded yet!'])
                @endif
            </tab>
        </tabs>
    @endif

    @php
        $names = ['Lyca36', 'Alefire', 'fezzik_king', 'JayMonRabe'];
    @endphp
    @include('includes.credits')
@stop
