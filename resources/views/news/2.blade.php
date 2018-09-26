@extends('layouts.card')
@section('card-header')
12 september 2018
@overwrite
@section('card-detail')
    @php($maps = json_encode([['blocks' => [0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1,1,1,1,1,0,0,0,0,0,0,0,0], 'identifier' => 2, 'isVisible' => true]]))
    The basic base drawing components are ready. Here's an example.<br>
    <vue-base :maps="{{ $maps }}"></vue-base>
@overwrite
