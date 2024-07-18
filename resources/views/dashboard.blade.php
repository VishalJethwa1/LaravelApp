<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1>Dashboard</h1>
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td><a href="logout">Logout</a></td>
            </tbody>
        </table>
    </div>
</body>
</html>