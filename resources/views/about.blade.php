@extends('layouts.app')
@section('content')
    @if (isset($maps))
    @foreach ($maps as $map)
        @include ('layouts.map', $map)
    @endforeach
    @endif
@stop
