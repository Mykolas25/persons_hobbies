<html>
<body>

<form action="{{route('app.peoples.create')}}" method="POST">
    Name: <input type="text" name="name"><br>
    City: <input type="text" name="city"><br>

    <input type="submit">

    {{ csrf_field() }}

</form>

</body>
</html>