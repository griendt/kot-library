@extends('layouts.app')
@section('content')
    <h2>Game Information</h2>
    This section will tell you all about <b>in-game available information</b>. This includes some probabilities, but mostly upgrades.<br>
    For an in-depth analysis of how to use all this information in the best way possible to become the best in the game as you can be,
    check out the <a href="{!! route('content.guides') !!}">guides page</a>.
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
            @php
                $names = ['Lyca36', 'RyblikKoT', 'Tmansports', 'SkydancerKot', 'Luis95kot', 'Mario_kot']
            @endphp
            @include('includes.credits')
        </tab>
        <tab label="Castle & Tree" class="tab-pane fade show">
            @include('includes.info.castle.intro')
            @include('includes.info.castle.merchant')
            @include('includes.info.castle.castle')
            @include('includes.info.castle.tree')
        </tab>
        <tab label="Traps" class="tab-pane fade show">
            @include('includes.info.traps.intro')
        </tab>
        <tab label="Spells" class="tab-pane fade show">
            @include('includes.info.spells.intro')
        </tab>
        <tab label="Guilds" class="tab-pane fade show">
            @include('includes.info.guilds.intro')
        </tab>
        <tab label="Unique Gems" class="tab-pane fade show">
            @include('includes.info.gems.intro')
        </tab>
    </tabs>
@stop
