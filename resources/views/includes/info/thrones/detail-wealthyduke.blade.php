@extends('layouts.card')
@section('card-header')
    Wealthy Duke
@overwrite
@section('card-detail')
    <div style="min-height: 80px">{!! throne('wealthyduke') !!} <mark>Wealthy Duke</mark> is the third throne in the series. It is the first that actually grants the player any actual bonuses, besides simply providing {!! res('health-bonus') !!}<mark>Health</mark>.
    </div><hr>
    <ul>
        <li>
            <u>Level 1</u>: Costs {!! res('gold') !!}25000 {!! res('leaf') !!}2 {!! res('dust') !!}1 to craft.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 110 <span class="diff">(+10)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 5% <span class="diff">(+5%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 2</u>: Costs {!! res('gold') !!}27000 {!! res('leaf') !!}2 {!! res('dust') !!}1 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 115 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 8% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 3</u>: Costs {!! res('gold') !!}30000 {!! res('leaf') !!}3 {!! res('dust') !!}2 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 120 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 11% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 4</u>: Costs {!! res('gold') !!}35000 {!! res('leaf') !!}3 {!! res('dust') !!}2 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 125 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 14% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 5</u>: Costs {!! res('gold') !!}40000 {!! res('leaf') !!}3 {!! res('dust') !!}3 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 130 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 17% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
    </ul>
@overwrite
