<html>
<body>

{{--<form action="{{route('app.peoples.create')}}" method="POST">--}}
    {{--Name: <input type="text" name="name"><br>--}}
    {{--City: <input type="text" name="city"><br>--}}

    {{--<input type="submit">--}}

    {{--{{ csrf_field() }}--}}

{{--</form>--}}


@if (isset($name))
    <div style="background: hotpink; width:300px">Irasas sukurtas sekminga: {{$name . $id}}</div>
@endif

{!! Form::open(['url' => route('app.peoples.create')]) !!}

{!! Form::label('name', 'Name') !!}

{!! Form::text('name') !!}

{!! Form::select('city_id', App\models\HCCity::pluck('name', 'id')) !!}

{{--{!! Form::checkbox('Hobbies', App\models\HCHobbies::pluck('name', 'id')) !!}--}}

{{ Form::label('hobbies', 'Hobbies') }}

@foreach($hobbies as $key => $hobby)
    {{Form::checkbox('hobbies[]', $key)}}
    {{$hobby}}
@endforeach

{!!  Form::submit('Click Me!')!!}

{!! Form::close() !!}


</body>
</html>



