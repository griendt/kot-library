@extends('layouts.app')
@section('content')
    <h2>Telegram Channels</h2>
    Here you will find links to various Telegram Channels. Some of these were used for this website!<hr>
    <h3>Layouts & Exploits Channels</h3>
    <ul>
        <li>
            {!! tme('BasesAndExploits') !!}: A collection of videos showing how to save, and how to beat, a large variety of layouts.
        </li>
        <li>
            {!! tme('AshVideos') !!}: A channel composed of the videos created by {!! tme('AshKOT') !!}.
        </li>
        <li>
            {!! tme('randomlayout') !!}: This channel shows a large variety of layouts and exploits where the trap sets used come from the <mark>Random Traps</mark> option.
        </li>
        <li>
            {!! tme('toastvideos') !!}: A compilation of videos created by {!! tme('berndt_toast') !!}.
        </li>
    </ul>

    <h3>Path Dependency Channels</h3>
    <ul>
        <li>
            {!! tme('sawjumpacademy') !!}: A channel dedicated to that mysterious trap: the saw. This channel covers theory as well as practice of saw jumps, most notably the inline ones, and provides general tips and tricks to raiding these bases successfully.
        </li>
        <li>
            {!! tme('pathdependent') !!}: Dedicated to analysing all sorts of path-dependent layouts and jumps. Covers a lot of saw jumps, but also other jumps that are path-dependent such as platforms and gravity switches.
        </li>
    </ul>

    <h3>Gameplay Help Channels</h3>
    <ul>
        <li>
            {!! tme('schoolforraiders') !!}: A channel in which players can ask other players questions on how to pass certain bases or get past certain combinations of traps.
        </li>
        <li>
            {!! tme('schoolfordefenders') !!}: A channel in which players can ask other players on which layout to save given a certain base (and/or traps).
        </li>
    </ul>

    <h3>Gem Retrieval Channels</h3>
    <ul>
        <li>
            {!! tme('AoRetrievers') !!}: A streamlined channel dedicated to get help from pro players to retrieve your gems, particularly in hard bases.
        </li>
        <li>
            {!! tme('KoTAER') !!}: A place where players can contact other players to to organise easy retrievals for gems.
        </li>
        <li>
            {!! tme('EmergencyRetrieve') !!}: A channel where players can ask for critical help, when a gem is stuck in a difficult base and more than 24 hours have passed since the gem was lost.
        </li>
    </ul>

    <h3>Community Channels</h3>
    <ul>
        <li>
            {!! tme('KoTAAF') !!}: The biggest King of Thieves community out there, in Telegram format: Ask A Friend!
        </li>
        <li>
            {!! tme('KoT_Interviews') !!}: A full collection of all King of Thieves interviews given over time for everyone to read back.
        </li>
        <li>
            {!! tme('kothis') !!}: A channel dedicated to eternalise the history of King of Thieves. Take a glimpse into the past!
        </li>
        <li>
            <a href="https://t.me/joinchat/CWOHFFGvm1Gir7l0BZvsHQ">KoT Chess</a>: A group for King of Thieves players to hang out and discuss and play the game of chess.
        </li>
        <li>
            <a href="https://t.me/joinchat/CZ0UTz7J6HW2OammjwcQXQ">KoT Arcade</a>: A group where players can compete in other games together than King of Thieves.
        </li>
    </ul>
@stop
