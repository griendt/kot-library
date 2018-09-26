@extends('layouts.app')
@section('content')
    <h2>Bases</h2>
    Here you will find a collection of all currently known bases with their numbers.<br>
    One day in the future you will be able to click on them to view more info.<br>
    And hopefully one day you can smart-search for them.<br>
    But for now all you can do is look.<br>
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
        'Trap 1' => 'select',
        'Trap 2' => 'select',
        'Trap 3' => 'select',
        'Edit mode image' => 'file',
        'Solution video' => 'file',
        ];
        @endphp
        @include('includes.form', [
        'route' => 'layout.store',
        'icons' => 'traps',
        'header' => 'Upload Layout',
        'fields' => $form,
        'buttonText' => 'Upload',
        'selectOptions' => [
            'Trap 1' => $traps,
            'Trap 2' => $traps,
            'Trap 3' => $traps,
            ]
        ])

        @php($trapJson = json_encode($traps))
    @endif
@stop
