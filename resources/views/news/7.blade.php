@extends('layouts.card')
@section('card-header')
    17 november 2018
@overwrite
@section('card-detail')
    Several scripts that run client-side, such as the filter panel in the <a style="background: none" href="{!! route('content.base') !!}">bases screen</a> could cause the site to respond a little slowly, especially on less powerful devices and phones. These scripts have been altered to run asynchronously. This means that the input fields will remain responsive, even if the rest of the script is busy computing the results. The experience now feels much smoother. The same technique will be used for certain heavy real-time computations (such as probabilities and statistics), ensuring a comfortable use of the site.
@overwrite
