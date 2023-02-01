<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <table class="table table-dark table-striped">
    <tr>
        <th>Username*</th>
        <th>Email</th>
        <th>Mobile No*</th>
        <th>City*</th>
        <th>State*</th>
        <th>Country</th>
    </tr>
    <tbody>
        <tr>
      
                <td>{{$result->user_name}}</td>
                <td>{{$result->email}}</td>
                <td>{{$result->mobile}}</td>
                <td>{{$result->city_name}}</td>
                <td>{{$result->state_name}}</td>
                <td>{{$result->name}}</td>
          
        </tr>
    </tbody>
</table>
</body>
</html>

