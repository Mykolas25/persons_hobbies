<html>
<body>

<form action="{{route('app.hobbies.create')}}" method="POST">
    Name: <input type="text" name="name"><br>
    <input type="submit">

    {{ csrf_field() }}

</form>

</body>
</html>