@extends('layouts.app')
@section('content')
    <h2>Bases</h2>
    Here you will find a collection of all currently known bases with their numbers.<br>
    One day in the future you will be able to click on them to view more info.<br>
    And hopefully one day you can smart-search for them.<br>
    But for now all you can do is look.<br>
    {!! tme('alucen') !!} <br>
    @if (isset($maps))
        <ul>
            @{{ message }}
        </ul>
        <div v-for="map in maps" class="map-wrapper">
            @{{ map.identifier }}
{{--            @include ('layouts.map', $map)--}}
        </div>
    @endif
@stop
