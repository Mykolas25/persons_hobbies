@extends('main')

@section('content')

    {{--<div>Total records:{{ $totalCount  }}</div>--}}

    <div>People:</div>

    <table style="border: solid 1px black">
        <th style="border: solid 1px black">People</th>
        <th style="border: solid 1px black">Hobbies</th>
        {{--<th style="border: solid 1px black">Count</th>--}}
        @foreach($peoples as $person)
            <tr>
                <td style="border: solid 1px black">{{ $person['name'] }}</td>
                @foreach ($person['peoplesHobbies'] as $hobby)
                    <td style="border: solid 1px black">{{ $client['name'] }} </td>
                    <td style="border: solid 1px black">{{sizeof($project['persons'])}}<td>
                @endforeach
            </tr>
        @endforeach

    </table>
@endsection

@section('title',trans('app.projects'))