@extends('layouts.card')
@section('card-header')
    Is the Merchant useful?
@overwrite
@section('card-detail')
    The
    <mark>Merchant
    </mark> upgrade distinguishes itself from the other Castle upgrades in that it actually influences the other upgrades. It lowers the amount of {!! res('gold') !!}
    <mark>gold</mark> it costs by a certain percentage. In itself, it is the most expensive upgrade at a time, so it is a true investment for the long term.
    <hr>
    Note that the
    <mark>Merchant</mark> upgrade is locked initially. In order to be able to upgrade it, the player must first upgrade:
    <ul>
        <li>
            <mark>Lock Pick Capacity</mark>
            to level 4;
        </li>
        <li>
            <mark>Lock Regeneration Speed</mark>
            to level 4;
        </li>
        <li>
            <mark>Skull Gold Bonus</mark>
            to level 4.
        </li>
    </ul>
    Therefore, the costs of these 12 upgrades cannot be lowered by the
    <mark>Merchant</mark> upgrade. This initial cost sums to {!! res('gold') !!}204000.
    <hr>
    One might wonder: does the
    <mark>Merchant</mark> upgrade actually reduce the overall cost to max the
    <mark>Castle</mark>? The answer is simple: <u>yes</u>. However, upgrading the
    <mark>Merchant
    </mark> is relatively expensive, so it will halt the speed of the other upgrades for some time. On the other hand, there are only 11 levels in total to upgrade.
    <br>
    <table class="table-wrapper">
        <tr>
            <td>
                <div class="table-container">
                    <table class="table table-sm table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>\(n\)</th>
                            <th>{!! res('gold') !!}</th>
                        </tr>
                        </thead>
                        <tr><td>1</td><td style="text-align: right">34834000</td></tr>
                        <tr><td>2</td><td style="text-align: right">33342300</td></tr>
                        <tr><td>3</td><td style="text-align: right">31837600</td></tr>
                        <tr><td>4</td><td style="text-align: right">30320900</td></tr>
                        <tr><td>5</td><td style="text-align: right">28834200</td></tr>
                        <tr><td>6</td><td style="text-align: right">27332500</td></tr>
                        <tr><td>7</td><td style="text-align: right">25815800</td></tr>
                        <tr><td>8</td><td style="text-align: right">24319100</td></tr>
                        <tr><td>9</td><td style="text-align: right">22804901</td></tr>
                        <tr><td>10</td><td style="text-align: right">21303201</td></tr>
                        <tr><td>11</td><td style="text-align: right">19781502</td></tr>
                    </table>
                </div>
            </td>
            <td>
                As an illustration, let us assume the <def title="This means the first four levels of Lock Pick Capacity, Lock Regeneration Speed and Skull Gold Bonus.">minimal upgrades</def> were done to unlock the
                <mark>Merchant</mark>. Then, let's upgrade the
                <mark>Merchant</mark> up to level \(n\). And upgrade the rest of the
                <mark>Castle
                </mark> afterwards and keep track of the total amount of {!! res('gold') !!} spent to max the rest of the
                <mark>Castle</mark>. When that is done, of course there is no point to upgrade the <mark>Merchant</mark> any furter, so those redundant costs are exluded. The results are shown here.<br>
                It is clear that upgrading the <mark>Merchant</mark> trait as early as possible leads to the largest benefits. You could save up to almost fifteen million in gold by upgrading the Merchant completely and as early as possible, compared to not upgrading it at all. Of course, in general, people will perform other upgrades between upgrading the <mark>Merchant</mark>. In that case, the total costs will lie somewhere between these values. In any case, this table shows the usefulness of the <mark>Merchant</mark> as an upgrade, especially for players starting off for the first time.
            </td>
        </tr>
    </table>
@overwrite
