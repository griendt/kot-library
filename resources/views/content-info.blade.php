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
                            @include('includes.info.thrones.detail-roughcut')
                            @include('includes.info.thrones.detail-braveheart')
                            @include('includes.info.thrones.detail-wealthyduke')
                            @include('includes.info.thrones.detail-luckycrystal')
                            @include('includes.info.thrones.detail-wisejudge')
                            @include('includes.info.thrones.detail-sunlit')
                            @include('includes.info.thrones.detail-foreseer')
                            @include('includes.info.thrones.detail-crown')
                            @include('includes.info.thrones.detail-kok')
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
