@extends('layouts.app')
@section('content')
    <h1>Home</h1>

    {{ trans('Welcome') }}

    <h2>News</h2>
    @foreach ($news as $new)
        @include('news.'.$new)
    @endforeach
@stop
