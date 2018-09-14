@extends('layouts.card')
@section('card-header')
12 september 2018
@overwrite
@section('card-detail')
    This is the third news item. Let's try to draw a base.<br>
        @include('layouts.map', ['blocks' => [0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1,1,1,1,1,0,0,0,0,0,0,0,0], 'identifier' => 2])
@overwrite
