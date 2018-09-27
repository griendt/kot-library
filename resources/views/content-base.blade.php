@extends('layouts.app')
@section('content')
    @if (Session::has('successfulUpload'))
        <div class="alert alert-success" role="alert" alert-dismissible fade show>
            {{ Session::get('successfulUpload') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <h2>Bases</h2>
    Here you can find a collection of all currently known bases with their numbers.<br>
    Use the panel below to filter the set of bases by the blocks and items that are in them.<br>
    Click on a base to view a detailed page.
    <hr />
    @if (isset($maps) && !$detail)
        <vue-big-base></vue-big-base>
        <hr />
        <vue-base :maps="{{ $maps }}"></vue-base>
    @else
        <a href="{{ route('content.base') }}" class="btn-secondary btn">
            <i class="fa fa-arrow-left"></i> Back</a>
        <vue-base style='float: right' :maps="{{ $maps }}"></vue-base>

        @php
        $form = [
        'base_identifier' => 'hidden',
        'Trap 1' => 'select',
        'Trap 2' => 'select',
        'Trap 3' => 'select',
        'Edit mode image' => 'file',
        'Solution video' => 'file',
        'Comment' => 'textarea',
        ];
        @endphp

        @auth
            @include('includes.form', [
            'route' => 'layout.store',
            'icons' => 'traps',
            'header' => 'Upload Layout',
            'fields' => $form,
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
    @endif
@stop
