<html>
<body>

{{--<form action="{{route('app.cities.create')}}" method="POST">--}}
    {{--Name: <input type="text" name="name"><br>--}}
    {{--<input type="submit">--}}

    {{--{{ csrf_field() }}--}}

{{--</form>--}}

@if (isset($name))
    <div style="background: hotpink; width:300px">Irasas sukurtas sekminga: {{$name . $id}}</div>
@endif

{!! Form::open(['url' => route('app.cities.create')]) !!}

{!! Form::label('city', 'City') !!}

{!! Form::text('name') !!}

{!!  Form::submit('Click Me!')!!}

{!! Form::close() !!}


</body>
</html>