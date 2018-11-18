@extends('layouts.card')
@section('card-header')
16 november 2018
@overwrite
@section('card-detail')
    Work has begun on a <a style="background: none" href="{!! route('probability') !!}">probability page</a>. In there you can now calculate two statistics:
    <ul>
        <li>What are the odds that, given a certain spin success ratio, I got only \(n\) out of \(m\) successful spins?</li>
        <li>If my throne says I have a best pick bonus of \(n\)%, what are the actual odds that the best gem is picked?</li>
    </ul>
    More such questions about probability and statistics with real-time calculators will follow soon!<br>
    The reason this page is not yet available in the side panel is because it is a work in progress and might break at any point in time. It will be added when it is more complete and guaranteed to be stable.
@overwrite
