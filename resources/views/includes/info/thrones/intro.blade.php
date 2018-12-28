@extends('layouts.card')
@section('card-header')
    Intro
@overwrite
@section('card-detail')
    <mark>Thrones</mark> may provide a thief with four different characteristic traits. Each throne, besides <mark>Rough Cut</mark>, needs to be crafted before it may be used.
    Crafting and upgrading requires <mark>magic inFogredients</mark> {!! res('leaf') !!} {!! res('dust') !!} {!! res('mush') !!} {!! res('eye') !!}. It is possible to use <mark>orbs</mark> {!! res('orb') !!} as well, but this is highly discouraged due to the high prices in-game for the magic ingredients.<hr>
    Thrones have four essential properties:
    <ul>
        <li>
            {!! res('health-bonus') !!} <mark>Health:</mark> Health defines how many hits are permitted for the thief in order to complete a base with three, two, or one star respectively.
        </li>
        <li>
            {!! res('gold-bonus') !!} <mark>Gold Bonus:</mark> In addition to the base amount of gold stolen, the <mark>Gold Bonus</mark> adds a certain percentage of gold each raid. Note that the person who got raided loses the same amount of gold that you have stolen from him -- including this bonus.
        </li>
        <li>
            {!! res('steal-bonus') !!} <mark>Gem Steal Bonus:</mark> In addition to the base chances you get when finishing a raid, the <mark>Gem Steal Bonus</mark> increases the change of the raider to obtain the gem.
        </li>
        <li>
            {!! res('best-pick-bonus') !!} <mark>Best Pick Bonus:</mark> In principle, a random gem gets selected when a thief finishes a raid. However, the <mark>Best Pick Bonus</mark> gives the raider an additional chance to select the highest valued gem.
            <ul>
                <li>The bonus is given in percentages. This percentage symbolizes the chance that the best pick <em>label</em> will appear at the totem screen.</li>
                <li>When the <em>label</em> appears, you are guaranteed to pick the highest valued gem.</li>
                <li>Even if there are multiple gems of the very same value, the game internally considers one of them to be the highest value gem. In case that the highest value in the totem is larger than 50000, the highest valued gem will be placed in the middle of the totem (in the raider's perspective). Thus, if the best pick <em>label</em> is triggered, in these cases, the middle gem will be selected.</li>
                <li>If the bonus does not trigger, you will see no <em>label</em>. In this case, a random gem is selected uniformly. This can still be the best gem!</li>
                <li>This means that for a <mark>Best Pick Bonus</mark> \(n\)% the true chance of selecting the best gem is \(n + (100-n)/3\) percent.</li>
                {{--<li>You can calculate this for yourself at the <a style="background: none" href="{!! route('probability') !!}">probability page</a>.</li>--}}
            </ul>
        </li>
        <tip>Curious about your throne's true best pick chance? Check for yourself over at the <a style="background: none" href="{!! route('probability') !!}">probability page</a>.</tip>
    </ul>
@overwrite
