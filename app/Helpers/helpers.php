<?php

function tme($tag) {
    return "<a href=\"https://t.me/$tag\">@$tag</a>";
}

function img($path, $classes = []) {
    $classes = (array) $classes;
    return "<img src='" . app('url')->asset($path) . "' class=" . implode(' ', $classes) . ">";
}

function res($name, $classes = ['ingredient']) {
    return img('storage/resources/' . $name . '.png', $classes);
}

function throne($name, $classes = ['throne']) {
    return img('storage/thrones/' . $name . '.png', $classes);
}
