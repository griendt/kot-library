@extends('layouts.app')
@section('content')
    <div>
        <h2>Base Submissions</h2>
        <div class="table-container">
            <table style="width: min-content" class="table table-sm table-striped">
                <thead class="thead-dark">
                <th scope="col"></th>
                <th scope="col" colspan="2">Base Uploads</th>
                </thead>
                @php
                    $number = 1
                @endphp
                @foreach ($totalCountsByUsername as $user => $count)
                    <tr>
                        <td>{{ $number }}</td>
                        <td>{{ $user }}</td>
                        <td>{{ $count }}</td>
                    </tr>
                    @php
                        $number++
                    @endphp
                @endforeach
            </table>
        </div>
        <div class="table-container">
            <table style="width: min-content" class="table table-sm table-striped">
                <thead class="thead-dark">
                <th scope="col"></th>
                <th scope="col" colspan="2">Layouts</th>
                </thead>
                @php
                    $number = 1
                @endphp
                @foreach ($layoutCountsByUsername as $counts)
                    <tr>
                        <td>{{ $number }}</td>
                        <td>{{ $counts->uploader_user_name }}</td>
                        <td>{{ $counts->total }}</td>
                    </tr>
                    @php
                        $number++
                    @endphp
                @endforeach
            </table>
        </div>
        <div class="table-container">
            <table style="width:min-content" class="table table-sm table-striped">
                <thead class="thead-dark">
                <th scope="col"></th>
                <th scope="col" colspan="2">Exploits</th>
                </thead>
                @php
                    $number = 1
                @endphp
                @foreach ($exploitCountsByUsername as $counts)
                    <tr>
                        <td>{{ $number }}</td>
                        <td>{{ $counts->uploader_user_name }}</td>
                        <td>{{ $counts->total }}</td>
                    </tr>
                    @php
                        $number++
                    @endphp
                @endforeach
            </table>
        </div>
    </div>
    <div style="clear: left">
        <hr>
        <h2>Progress (Bases)</h2>

        @php
            $basesWithManySubmissions = 0;
            foreach ($progressCounts['submissionsByBase'] as $base => $counts) {
                if ($counts > $manyThreshold) { $basesWithManySubmissions++; }
            }
            $basesWithAnySubmissions = 0;
            foreach ($progressCounts['submissionsByBase'] as $base => $counts) {
                if ($counts > 0) { $basesWithAnySubmissions++; }
            }
        @endphp
        Bases that have at least one exploit: <strong>{{ $progressCounts['basesWithExploits'] }}</strong>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated"
                 role="progressbar"
                 aria-valuenow="75"
                 aria-valuemin="0"
                 aria-valuemax="{{ $progressCounts['basesWithExploits'] }}"
                 style="width: {{ 100*$progressCounts['basesWithExploits']/$baseCount }}%">
                {{ round(100*$progressCounts['basesWithExploits']/$baseCount) }}%
            </div>
        </div>
        Bases that have at least one layout: <strong>{{ $progressCounts['basesWithLayouts'] }}</strong>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated"
                 role="progressbar"
                 aria-valuenow="75"
                 aria-valuemin="0"
                 aria-valuemax="{{ $progressCounts['basesWithLayouts'] }}"
                 style="width: {{ 100*$progressCounts['basesWithLayouts']/$baseCount }}%">
                {{ round(100*$progressCounts['basesWithLayouts']/$baseCount) }}%
            </div>
        </div>
        Bases that have at least <strong>1</strong> layout/exploit: <strong>{{ $basesWithAnySubmissions }}</strong>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated"
                 role="progressbar"
                 aria-valuenow="75"
                 aria-valuemin="0"
                 aria-valuemax="{{ $progressCounts['basesWithLayouts'] }}"
                 style="width: {{ 100*$basesWithAnySubmissions/$baseCount }}%">
                {{ round(100*$basesWithAnySubmissions/$baseCount) }}%
            </div>
        </div>
        Bases that have at least <strong>{{ $manyThreshold }}</strong> layouts/exploits:
        <strong>{{ $basesWithManySubmissions }}</strong>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                 role="progressbar"
                 aria-valuenow="75"
                 aria-valuemin="0"
                 aria-valuemax="{{ $progressCounts['basesWithLayouts'] }}"
                 style="width: {{ 100*$basesWithManySubmissions/$baseCount }}%">
                {{ round(100*$basesWithManySubmissions/$baseCount) }}%
            </div>
        </div>
    </div>
@stop
