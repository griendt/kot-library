@extends('layouts.card')
@section('card-header')
    Sun Lit
@overwrite
@section('card-detail')
    <div style="min-height: 80px">{!! throne('sunlit') !!} <mark>Sun Lit</mark> is the sixth throne in the series. It is essentially a continuation of <mark>Wise Judge</mark> in the sense that it does not add any new powers, it just improves the statistics. It has five levels just like its predecessor.
    </div><hr>
    <ul>
        <li>
            <u>Level 1</u>: Costs {!! res('gold') !!}140000 {!! res('mush') !!}3 {!! res('eye') !!}1 to craft.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 200 <span class="diff">(+10)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 45% <span class="diff">(+2%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 35% <span class="diff">(+3%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 20% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 2</u>: Costs {!! res('gold') !!}150000 {!! res('mush') !!}3 {!! res('eye') !!}2 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 205 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 47% <span class="diff">(+2%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 37% <span class="diff">(+2%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 23% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 3</u>: Costs {!! res('gold') !!}160000 {!! res('mush') !!}4 {!! res('eye') !!}2 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 210 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 49% <span class="diff">(+2%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 39% <span class="diff">(+2%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 26% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 4</u>: Costs {!! res('gold') !!}170000 {!! res('mush') !!}4 {!! res('eye') !!}3 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 215 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 51% <span class="diff">(+2%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 41% <span class="diff">(+2%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 29% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 5</u>: Costs {!! res('gold') !!}180000 {!! res('mush') !!}5 {!! res('eye') !!}3 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 220 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 53% <span class="diff">(+2%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 43% <span class="diff">(+2%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 32% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
    </ul>
@overwrite
