@extends('layouts.app')
@section('content')
    <h2>Guides</h2>
    Here you will find various user-written guides to help you throughout the game. Having all the information out there is nice,
    but it does not necessarily help you perform all the right jumps, employ the right tactics and take the best decisions during
    the carreer of your account.
    <tabs>
        <tab label="Saw Jump Academy" class="tab-pane fade show">
            @include('includes.guides.sja.intro')
        </tab>
        <tab label="Guild Strategy" class="tab-pane fade show">
            <wip></wip>
        </tab>
        <tab label="Newbie Guide" class="tab-pane fade show">
            <wip></wip>
        </tab>
    </tabs>
@stop
