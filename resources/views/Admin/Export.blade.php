<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>User count:{{$count}}</p>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>gender</th>
            <th>Email</th>
            <th>phone</th>
            <th>martial_status</th>
            <th>source</th>





        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone?$user->phone:'-'}}</td>
            <td>{{ $user->Marital_Status }}</td>
            <td>{{ $user->source }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
