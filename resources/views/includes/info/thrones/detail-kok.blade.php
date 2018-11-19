@extends('layouts.card')
@section('card-header')
    King of Kings
@overwrite
@section('card-detail')
    <div style="min-height: 80px">{!! throne('kok') !!} <mark>King of Kings</mark> is a throne that is not accessible for all players. It is unique, alongside <mark>Crown Champion</mark> throne, in the sense that once obtained, you will lose it again and you must earn it all over again. The only way to obtain the throne is to finish in first place in a <mark>King of Kings</mark> league round. You will then obtain the throne, along with the <mark>King of Kings</mark> <em>outfit</em>. The outfit will be yours forever, but the throne will last only for the duration of one guild battle.
    </div><hr>
    <ul>
        <li>{!! res('health-bonus') !!}<mark>Health: </mark> 400 <span class="diff">(+100 over Foreseer 15)</span></li>
        <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 80% <span class="diff">(+10% over Foreseer 15)</span></li>
        <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 80% <span class="diff">(+10% over Foreseer 15)</span></li>
        <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 80% <span class="diff">(+10% over Foreseer 15)</span></li>
    </ul>
@overwrite
