@extends('layouts.app')
@section('content')
<h2>Probability</h2>
<div class="row justify-content-start float-none">
    <div class="col-md-11">
        <div class="card">
            <div class="card-header">
                Spinner Statistics </div>
            <div class="card-body">
                <probability></probability>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-start float-none" id="prob-bp">
    <div class="col-md-11">
        <div class="card">
            <div class="card-header">
                Corrected Gem Chances</div>
            <div class="card-body">
                <gem-chance-probability></gem-chance-probability>
            </div>
        </div>
    </div>
</div>
@stop


