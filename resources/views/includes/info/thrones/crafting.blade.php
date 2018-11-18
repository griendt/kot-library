@extends('layouts.card')
@section('card-header')
    Crafting
@overwrite
@section('card-detail')
    Crafting thrones goes in a linear manner: there is only one way to go from one throne to the next. Each throne upgrade requires resources in the form of {!! res('gold') !!} <mark>gold</mark> and some <mark>magic ingredients</mark>. At first, you will mostly need {!! res('leaf') !!}<mark>leaves</mark> and {!! res('dust') !!}<mark>dust</mark>, but later on, the throne upgrade will require mostly {!! res('mush') !!}<mark>mushrooms</mark> and {!! res('eye') !!}<mark>eyeballs</mark>.<hr>
    <tip>{!! res('mush') !!}<mark>Mushrooms</mark> and {!! res('eye') !!}<mark>eyeballs</mark> have much lower probability to obtain after finishing a ritual. Therefore, it is smart to <em>respin</em> once or twice after each ritual until you obtain one of these rare ingredients. That way, you will be able to upgrade your throne faster. Even if right now you do not need these ingredients for your throne, you will be sure to need them later on.</tip>
    <tip>If you have not yet achieved the best craftable throne, <mark>Foreseer 15</mark>, then be wary of the <mark>Style-o-Thief machine</mark> and guild experience. These features ask for your <mark>magic ingredients</mark> too. Make sure not to spend {!! res('mush') !!}<mark>mushrooms</mark> and especially not {!! res('eye') !!}<mark>eyeballs</mark> until you have your throne maxed.</tip>
@overwrite
