@extends('layouts.card')
@section('card-header')
    Lucky Crystal
@overwrite
@section('card-detail')
    <div style="min-height: 80px">{!! throne('luckycrystal') !!} <mark>Lucky Crystal</mark> is the fourth throne in the series. It gives the player an additional bonus modifier during raiding: an increased {!! res('steal-bonus') !!}<mark>Gem Steal Chance</mark>.
    </div><hr>
    <incomplete></incomplete>
    <ul>
        <li>
            <u>Level 1</u>: Costs {!! res('gold') !!}45000 {!! res('leaf') !!}5 {!! res('dust') !!}3 to craft.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 140 <span class="diff">(+10)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 20% <span class="diff">(+3%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 5% <span class="diff">(+5%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 2</u>: Costs {!! res('gold') !!}50000 {!! res('leaf') !!}5 {!! res('dust') !!}3 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 145 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 23% <span class="diff">(+3%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 8% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 3</u>: Costs {!! res('gold') !!}60000 {!! res('leaf') !!}5 {!! res('dust') !!}4 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 150 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 26% <span class="diff">(+3%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 11% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 5</u>: Costs <mark>?</mark> to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 160 <span class="diff">(+?)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 32% <span class="diff">(+?)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 17% <span class="diff">(+?)</span></li>
            </ul>
        </li>
    </ul>
@overwrite
