@extends('layouts.app')
@section('content')
    <tabs>
        <tab label="Thrones" class="tab-pane fade show">
            @include('includes.info.thrones.intro')
            @include('includes.info.thrones.crafting')
            <div class="row justify-content-start float-none">
                <div class="col-md-11">
                    <div class="card">
                        <div class="card-header">Throne Details</div>
                        <div class="card-body">
                            @include('includes.info.thrones.detail-braveheart')
                        </div>
                    </div>
                </div>
            </div>
        </tab>
        <tab label="Other stuff" class="tab-pane fade show">
            Other stuff.
        </tab>
    </tabs>
@stop
