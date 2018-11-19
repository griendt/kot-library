@extends('layouts.card')
@section('card-header')
    Foreseer
@overwrite
@section('card-detail')
    <div style="min-height: 80px">{!! throne('foreseer') !!} <mark>Foreseer</mark> is last throne that can be <em>crafted</em>. It is unique in that it does not have one or five but a whopping 15 levels to max its stats. <mark>Foreseer 15</mark> is the highest throne available to every normal player.
    </div><hr>
    <ul>
        <li>
            <u>Level 1</u>: Costs {!! res('gold') !!}190000 {!! res('mush') !!}2 {!! res('eye') !!}1 to craft.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 230 <span class="diff">(+?)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 55% <span class="diff">(+?)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 45% <span class="diff">(+?)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 35% <span class="diff">(+?)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 2</u>: Costs {!! res('gold') !!}200000 {!! res('mush') !!}2 {!! res('eye') !!}1 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 235 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 56% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 47% <span class="diff">(+2%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 38% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 3</u>: Costs {!! res('gold') !!}200000 {!! res('mush') !!}2 {!! res('eye') !!}2 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 240 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 57% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 48% <span class="diff">(+1%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 40% <span class="diff">(+2%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 4</u>: Costs {!! res('gold') !!}220000 {!! res('mush') !!}3 {!! res('eye') !!}2 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 245 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 58% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 50% <span class="diff">(+2%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 43% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 5</u>: Costs {!! res('gold') !!}230000 {!! res('mush') !!}3 {!! res('eye') !!}2 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 250 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 59% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 51% <span class="diff">(+1%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 45% <span class="diff">(+2%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 6</u>: Costs {!! res('gold') !!}240000 {!! res('mush') !!}3 {!! res('eye') !!}3 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 255 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 60% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 53% <span class="diff">(+2%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 48% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 7</u>: Costs {!! res('gold') !!}250000 {!! res('mush') !!}4 {!! res('eye') !!}3 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 260 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 61% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 54% <span class="diff">(+1%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 50% <span class="diff">(+2%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 8</u>: Costs {!! res('gold') !!}260000 {!! res('mush') !!}4 {!! res('eye') !!}3 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 265 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 62% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 56% <span class="diff">(+2%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 53% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 9</u>: Costs {!! res('gold') !!}270000 {!! res('mush') !!}4 {!! res('eye') !!}4 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 270 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 63% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 57% <span class="diff">(+1%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 55% <span class="diff">(+2%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 10</u>: Costs {!! res('gold') !!}300000 {!! res('mush') !!}5 {!! res('eye') !!}4 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 275 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 64% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 59% <span class="diff">(+2%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 58% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 11</u>: Costs {!! res('gold') !!}340000 {!! res('mush') !!}5 {!! res('eye') !!}5 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 280 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 65% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 60% <span class="diff">(+1%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 60% <span class="diff">(+2%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 12</u>: Costs {!! res('gold') !!}380000 {!! res('mush') !!}6 {!! res('eye') !!}6 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 285 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 66% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 62% <span class="diff">(+2%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 63% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 13</u>: Costs {!! res('gold') !!}420000 {!! res('mush') !!}7 {!! res('eye') !!}7 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 290 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 67% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 63% <span class="diff">(+1%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 65% <span class="diff">(+2%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 14</u>: Costs {!! res('gold') !!}460000 {!! res('mush') !!}8 {!! res('eye') !!}8 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 295 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 68% <span class="diff">(+1%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 65% <span class="diff">(+2%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 68% <span class="diff">(+3%)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 15</u>: Costs {!! res('gold') !!}500000 {!! res('mush') !!}9 {!! res('eye') !!}9 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 300 <span class="diff">(+5)</span></li>
                <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 70% <span class="diff">(+2%)</span></li>
                <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 70% <span class="diff">(+5%)</span></li>
                <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 70% <span class="diff">(+2%)</span></li>
            </ul>
        </li>
    </ul>
@overwrite
