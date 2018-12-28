@extends('layouts.card')
@section('card-header')
23 december 2018
@overwrite
@section('card-detail')
    Various changes have been made to the layout of the site. A new purple-ish colour and a nice background. In addition, the responsiveness of the <a href="{!! route('probability') !!}">probability page</a> and the <a href="{!! route('content.base') !!}">bases page</a> has been fixed, after an external dependency was removed.<br>
    In addition, work has continued on migrating information from the old KoT guide, and tables have been added to the <a href="{!! route('content.info') !!}">information page</a>.<br>
    As a final note, tabs now become sticky through the use of URL anchors! This means that when you refresh the page, the same tab will show as where you left it.
@overwrite
