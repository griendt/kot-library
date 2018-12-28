@extends('layouts.card')
@section('card-header')
    Intro
@overwrite
@section('card-detail')
    A very important aspect of the game is upgrading various elements of the game. There are several groups of upgrades: <mark>Castle</mark> (which cost only {!! res('gold') !!}<mark>gold</mark>), the <mark>Tree</mark> (which cost only {!! res('tear') !!}<mark>tears</mark>), <mark>Traps</mark>, <mark>Thrones</mark>, and <mark>Spells</mark>. It is a good practice to keep a <mark>Castle</mark>, <mark>Tree</mark> as well as a <mark>Trap</mark> upgrade going on at the same time, as it will be much more time-efficient. For the <mark>Castle</mark> upgrade, it is typically very convenient to upgrade the <mark>Merchant</mark> as early on as possible. That way you will minimize the amount of gold needed to max the <mark>Castle</mark>.
@overwrite
