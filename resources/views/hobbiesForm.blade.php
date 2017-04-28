<html>
<body>

{{--<form action="{{route('app.hobbies.create')}}" method="POST">--}}
    {{--Name: <input type="text" name="name"><br>--}}
    {{--<input type="submit">--}}

    {{--{{ csrf_field() }}--}}

{{--</form>--}}

@if (isset($name))
    <div style="background: cornflowerblue; width:300px">Irasas sukurtas sekminga: {{$name . $id}}</div>
@endif

{!! Form::open(['url' => route('app.hobbies.create')]) !!}

{!! Form::label('hobbies', 'Hobbies') !!}

{!! Form::text('name') !!}

{!!  Form::submit('Click Me!')!!}

{!! Form::close() !!}



</body>
</html>