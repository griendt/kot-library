@extends('layouts.card')
@section('card-header')
30 september 2018
@overwrite
@section('card-detail')
    It is now possible to upload <strong>Layout</strong>s and <strong>Exploit</strong>s to each base! Both consist of a collection
    of <i>traps</i>, a <i>picture</i> and a <i>video</i>. <br>
    <strong>Layout</strong>s are designed to help players figure out how
    to save their bases, or to simply gain inspiration on what sort of setup they might be able to save in the base they
    currently reside in. On the other hand, <strong>Exploit</strong>s are intended to help raiders figure out how to beat a <strong>Layout</strong>!
    <hr>
    In order to upload content to the website, it is required that you <a href="{{ route('login') }}">login</a> to the site.<br>
    If you have no account yet, feel free to <a href="{{ route('register') }}">register</a>!
@overwrite
