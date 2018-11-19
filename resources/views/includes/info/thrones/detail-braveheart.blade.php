@extends('layouts.card')
@section('card-header')
    Brave Heart
@overwrite
@section('card-detail')
    <div style="min-height: 80px">{!! throne('braveheart') !!} <mark>Brave Heart</mark> is the first throne that is <em>crafted</em> in the game. You obtain it almost immediately after starting out with <mark>Rough Cut</mark>, as it is part of the tutorial. <span class="geffi">Geffi</span> will make you craft it after completing your first ritual in your second base.</div><hr>
    <ul>
        <li>
            <u>Level 1</u>: Free to craft.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 60 <span class="diff">(+20)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 2</u>: Costs {!! res('gold') !!}12000 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 70 <span class="diff">(+10)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 3</u>: Costs {!! res('gold') !!}15000 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 80 <span class="diff">(+10)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 4</u>: Costs {!! res('gold') !!}17000 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 90 <span class="diff">(+10)</span></li>
            </ul>
        </li>
        <li>
            <u>Level 5</u>: Costs {!! res('gold') !!}20000 to upgrade.
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 100 <span class="diff">(+10)</span></li>
            </ul>
        </li>
    </ul>
@overwrite
