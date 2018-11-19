@extends('layouts.card')
@section('card-header')
    Crown Champion
@overwrite
@section('card-detail')
    <div style="min-height: 80px">{!! throne('crown') !!} <mark>Crown Champion</mark> is a throne that is not accessible for all players. It is unique, alongside <mark>King of Kings</mark> throne, in the sense that once obtained, it is possible to actually lose it again and must be earned anew. The only way to obtain the throne is to finish an <mark>Arena Round</mark> in <mark>Crown Arena</mark> in position 1, 2 or 3 with your guild. You will then obtain the <mark>Crown Champion</mark> throne for the duration of the next <mark>Arena Round</mark>. This holds even if you decide to leave the guild you won the throne with after the next <mark>Arena Round</mark> starts.
    </div><hr>
    <ul>
        <li>{!! res('health-bonus') !!}<mark>Health: </mark> 350 <span class="diff">(+50 over Foreseer 15)</span></li>
        <li>{!! res('gold-bonus') !!}<mark>Gold Bonus: </mark> 75% <span class="diff">(+5% over Foreseer 15)</span></li>
        <li>{!! res('steal-bonus') !!}<mark>Steal Bonus: </mark> 75% <span class="diff">(+5% over Foreseer 15)</span></li>
        <li>{!! res('best-pick-bonus') !!}<mark>Best Pick Bonus: </mark> 75% <span class="diff">(+5% over Foreseer 15)</span></li>
    </ul>
@overwrite
