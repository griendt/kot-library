@extends('layouts.app')
@section('content')
    <tabs>
        <tab label="Thrones" class="tab-pane fade show">
            @include('includes.info.thrones')
        </tab>
        <tab label="Other stuff" class="tab-pane fade show">
            Other stuff.
        </tab>
    </tabs>
@stop
