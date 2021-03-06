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
    <h1 class="text-info text-center bold">CREAT</h1>
    <form method="post" action="{{ route('save', $cv_detail->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="name *" required="required" value="{{ $cv_detail->name }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">age</label>
                    <input type="number" class="form-control" name="age" required="required" value="{{ $cv_detail->age }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea type="text" class="form-control" name="description" rows="3" required="required">{{ $cv_detail->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Introduce</label>
                    <textarea type="text" class="form-control" name="introduce" rows="3" required="required">{{ $cv_detail->introduce }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Address</label>
                    <input type="text" class="form-control" name="address" required="required" value="{{ $cv_detail->address }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="text" class="form-control" name="email" required="required" value="{{ $cv_detail->email }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Phone</label>
                    <input type="number" class="form-control" name="phone" required="required" value="{{ $cv_detail->phone }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Experience</label>
                    <input type="number" class="form-control" name="experience" required="required" value="{{ $cv_detail->experience }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Avatar</label>
                    <input type="file" class="form-control" name="avatar" required="required">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail">Skill 1 Title</label>
                    <input type="text" class="form-control" name="skill1" required="required" value="{{ $cv_detail->skill1 }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Skill 1 Percentage</label>
                    <input type="number" class="form-control" name="html_css" required="required" value="{{ $cv_detail->html_css }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Skill 2 Title</label>
                    <input type="text" class="form-control" name="skill2" required="required" value="{{ $cv_detail->skill2 }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Skill 2 Percentage</label>
                    <input type="number" class="form-control" name="php" required="required" value="{{ $cv_detail->php }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Skill 3 Title</label>
                    <input type="text" class="form-control" name="skill3" required="required" value="{{ $cv_detail->skill3 }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Skill 3 Percentage</label>
                    <input type="number" class="form-control" name="laravel" required="required" value="{{ $cv_detail->laravel }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Skill 4 Title</label>
                    <input type="text" class="form-control" name="skill4" required="required" value="{{ $cv_detail->skill4 }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Skill 4 Percentage</label>
                    <input type="number" class="form-control" name="wordpress" required="required" value="{{ $cv_detail->wordpress }}">
                </div>


            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail">creative design</label>
                    <textarea type="text" class="form-control" name="design" rows="3" required="required">{{ $cv_detail->design }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">wordpress themes</label>
                    <textarea type="text" class="form-control" name="themes" rows="3" required="required">{{ $cv_detail->themes }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">user experience</label>
                    <textarea type="text" class="form-control" name="user_experience" rows="3" required="required">{{ $cv_detail->user_experience }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">unlimited support</label>
                    <textarea type="text" class="form-control" name="support" rows="3" required="required">{{ $cv_detail->support }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">company</label>
                    <textarea type="text" class="form-control" name="company" rows="3" required="required">{{ $cv_detail->company }}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Save</button>
                <a type="submit" href="{{ route('index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>

    </form>
</div>
</body>
</html>
