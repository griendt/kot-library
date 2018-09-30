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

    @php
        $names = ['Lyca36', 'JayMonRabe', 'fezzik_king'];
    @endphp
    @include('includes.credits')
    @if ($detail)
        <vue-base style='float: right' :maps="{{ $maps }}"></vue-base>
    @endif
    <h2>Bases
        @if ($detail)
            <a href="{{ route('content.base') }}" class="btn-secondary btn">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        @endif
    </h2>
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
            'Comment' => 'textarea',
            ];

            $offenseForm = [
            'base_identifier' => 'hidden',
            'Trap 1' => 'select',
            'Trap 2' => 'select',
            'Trap 3' => 'select',
            'Layout screenshot' => 'file',
            'Exploit video' => 'file',
            'Exploit comment' => 'textarea',
            ];
        @endphp
        <tabs>
            <tab label="Exploits" class="tab-pane fade show">
                @if (empty(json_decode($exploits)))
                    @include('includes.card', ['header' => 'No uploads yet ', 'detail' => 'No exploits have been uploaded yet!'])
                @endif
                @auth
                    @php
                    $optionalTraps = $traps->toArray();
                    array_unshift($optionalTraps, '-');
                    @endphp
                    @include('includes.form', [
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
            </tab>
            <tab label="Layouts" class="tab-pane fade show">
                @if (empty(json_decode($layouts)))
                    @include('includes.card', ['header' => 'No uploads yet ', 'detail' => 'No layouts have been uploaded yet!'])
                @endif
                    @auth
                        @include('includes.form', [
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
                @if (empty(json_decode($layouts)))
                    <vue-layout
                        :base_identifier="{{ json_decode($maps, true)[0]['identifier'] }}"
                        :layouts="{{ $layouts }}"
                        :csrf_token="{{ json_encode(csrf_token()) }}"
                        :logged_in="{{ json_encode(Auth::check()) }}"
                        ></vue-layout>
                @endif
            </tab>
        </tabs>
    @endif
@stop
