@extends('layouts.app')
@section('content')
    <h2>Home</h2>

    {{ trans('Welcome!') }}
    @php($page = 'home')

    <h3>News</h3>
    @foreach ($news as $new)
        @include('news.'.$new)
    @endforeach
@stop
