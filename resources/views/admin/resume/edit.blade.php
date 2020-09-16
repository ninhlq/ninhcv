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
    <h1>SUa</h1>
    <form method="post" action="{{ route('save_resume', $resume->id) }}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail">Frontend-developer - Facebook Inc.</label>
                    <textarea type="text" class="form-control" name="facebook" rows="3" required="required">{{ $resume->facebook }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">UI/UX Developer - Google Inc.</label>
                    <textarea type="text" class="form-control" name="google" rows="3" required="required">{{ $resume->google }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Senior Developer - Abc Inc.</label>
                    <textarea type="text" class="form-control" name="abc" rows="3" required="required">{{ $resume->abc }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Abc University of Los Angeles.</label>
                    <textarea type="text" class="form-control" name="university" rows="3" required="required">{{ $resume->university }}</textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail">Specialization Course</label>
                    <textarea type="text" class="form-control" name="specialization" rows="3" required="required">{{ $resume->specialization }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Abc High School.</label>
                    <textarea type="text" class="form-control" name="high" rows="3" required="required">{{ $resume->high }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Jessi Walsh</label>
                    <textarea type="text" class="form-control" name="manager" rows="3" required="required">{{ $resume->manager }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Designer.</label>
                    <textarea type="text" class="form-control" name="designer" rows="3" required="required">{{ $resume->designer }}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Save</button>
                <a type="submit" href="{{ route('index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
