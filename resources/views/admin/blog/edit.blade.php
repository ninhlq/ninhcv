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
    <h1>Blog</h1>
    <form method="post" action="{{ route('save_blog', $blog->id) }}">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="ExampleInputEmail1">original</label>
                    <textarea type="text" class="form-control" name="original" rows="3" required="required">{{ $blog->original }}</textarea>
                </div>

                <div class="form-group">
                    <label for="ExampleInputEmail1">popular</label>
                    <textarea type="text" class="form-control" name="popular" rows="3" required="required">{{ $blog->popular }}</textarea>
                </div>

                <div class="form-group">
                    <label for="ExampleInputEmail1">everyone</label>
                    <textarea type="text" class="form-control" name="everyone" rows="3" required="required">{{ $blog->everyone }}</textarea>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a type="submit" href="{{ route('index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
