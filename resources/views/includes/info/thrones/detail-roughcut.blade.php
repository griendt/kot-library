@extends('layouts.card')
@section('card-header')
    Rough Cut
@overwrite
@section('card-detail')
    <div style="min-height: 80px">{!! throne('roughcut') !!}
        <mark>Rough Cut</mark> is the throne that your butt will be seated on when you have just started playing the game. It is the weakest throne of the bunch. Fortunately, players are able to upgrade to a better throne very quickly. This throne is among the few thrones that cannot be <em>upgraded</em> nor <em>crafted</em>.
    </div>
    <hr>
    <ul>
        <li>
            <u>Level 1</u>:
            <ul>
                <li>{!! res('health-bonus') !!}<mark>Health: </mark> 40</li>
            </ul>
        </li>
    </ul>
@overwrite
