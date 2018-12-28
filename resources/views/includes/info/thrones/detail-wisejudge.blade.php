@extends('layouts.card')
@section('card-header')
    Wise Judge
@overwrite
@section('card-detail')
    <div style="min-height: 80px">{!! throne('wisejudge') !!} <mark>Wise Judge</mark> is the fifth throne in the series. It is the first throne that gives the player all three available bonuses, including the {!! res('best-pick-bonus') !!}<mark>Best Pick Bonus</mark>.
    </div><hr>
    <incomplete></incomplete>
    <ul>
        <li>
            <u>Level 1</u>: Costs {!! res('gold') !!}90000 {!! res('dust') !!}5 {!! res('mush') !!}1 to craft.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 170 <span class="diff">(+10)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 35% <span class="diff">(+3%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 20% <span class="diff">(+3%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 5% <span class="diff">(+5%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 2</u>: Costs {!! res('gold') !!}100000 {!! res('dust') !!}5 {!! res('mush') !!}2 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 175 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 37% <span class="diff">(+2%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 23% <span class="diff">(+3%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 8% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 3</u>: Costs <mark>?</mark> to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 180 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 39% <span class="diff">(+2%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 26% <span class="diff">(+3%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 11% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 4</u>: Costs {!! res('gold') !!}120000 {!! res('dust') !!}7 {!! res('mush') !!}2 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 185 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 41% <span class="diff">(+2%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 29% <span class="diff">(+3%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 14% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 5</u>: Costs {!! res('gold') !!}130000 {!! res('dust') !!}7 {!! res('mush') !!}3 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 190 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 43% <span class="diff">(+2%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 32% <span class="diff">(+3%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 17% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
    </ul>
@overwrite
