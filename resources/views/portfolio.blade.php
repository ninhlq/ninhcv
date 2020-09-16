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
    <h1>portfolios</h1>
    <form method="post" action="{{ route('ad') }}" class="col-md-12">
        @csrf
        <div class="form-group">
            <label for="ExampleInputEmail1">PROJECT TITLE</label>
            <textarea type="text" class="form-control" name="project" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a type="submit" href="{{ route('index') }}" class="btn btn-primary">Back</a>
    </form>
    </div>
</body>
</html>
