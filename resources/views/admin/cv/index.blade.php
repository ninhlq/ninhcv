<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h1>List CV</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cvs as $cv)
            <tr>
                <th scope="row">{{ $cv->id }}</th>
                <td>{{ $cv->name }}</td>
                <td>{{ $cv->age }}</td>
                <td>
                    <a href="{{ Route('cv_list', $cv->id) }}">edit</a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</body>
</html>
