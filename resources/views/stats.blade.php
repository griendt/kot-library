@extends('layouts.app')
@section('content')
<h2>Stats</h2>
<div class="table-container"><table style="width: min-content" class="table table-sm able-striped">
        <thead class="thead-dark">
        <th scope="col"></th>
        <th scope="col">Username</th>
        <th scope="col">#Uploads</th>
        </thead>
        @php ($number = 1)
        @foreach ($totalCountsByUsername as $user => $count)
            <tr>
                <td>{{ $number }}</td>
                <td>{{ $user }}</td>
                <td>{{ $count }}</td>
            </tr>
            @php ($number++)
        @endforeach
    </table></div>
<hr>
<div class="table-container"><table style="width: min-content" class="table table-sm table-striped">
<thead class="thead-dark">
    <th scope="col"></th>
    <th scope="col">Username</th>
    <th scope="col">#Layouts</th>
</thead>
@php ($number = 1)
@foreach ($layoutCountsByUsername as $counts)
<tr>
    <td>{{ $number }}</td>
    <td>{{ $counts->uploader_user_name }}</td>
    <td>{{ $counts->total }}</td>
</tr>
@php ($number++)
@endforeach
</table></div>

<hr>
<div class="table-container">
<table style="width:min-content" class="table table-sm table-striped">
    <thead class="thead-dark">
    <th scope="col"></th>
    <th scope="col">Username</th>
    <th scope="col">#Exploits</th>
    </thead>
    @php ($number = 1)
    @foreach ($exploitCountsByUsername as $counts)
        <tr>
            <td>{{ $number }}</td>
            <td>{{ $counts->uploader_user_name }}</td>
            <td>{{ $counts->total }}</td>
        </tr>
        @php ($number++)
    @endforeach
</table>
</div>
@stop
