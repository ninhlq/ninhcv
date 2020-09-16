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
<h1>sua</h1>
<form method="post" action="{{ route('edit_resume') }}"  class="col-md-6">
    <tbody>
    @foreach($cvs as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <div class="form-group">
                <label for="exampleInputEmail">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $item->name }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">age</label>
                <input type="number" class="form-control" name="age" value="{{ $item->age }}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea type="text" class="form-control" name="description" value="{{ $item->description }}" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Introduce</label>
                <textarea type="text" class="form-control" name="introduce" rows="3" value="{{ $item->introduce }}"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Address</label>
                <input type="text" class="form-control" name="address" value="{{ $item->address }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $item->email }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Phone</label>
                <input type="text" class="form-control" name="phone" value="{{ $item->phone }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Experience</label>
                <input type="number" class="form-control" name="experience" value="{{ $item->experience }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Avatar</label>
                <input type="text" class="form-control" name="avatar" value="{{ $item->avatar }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 1 Title</label>
                <input type="text" class="form-control" name="skill1" value="{{ $item->skill1 }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 1 Percentage</label>
                <input type="number" class="form-control" name="html_css" value="{{ $item->html_css }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 2 Title</label>
                <input type="text" class="form-control" name="skill2" value="{{ $item->skill2 }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 2 Percentage</label>
                <input type="number" class="form-control" name="php" value="{{ $item->php }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 3 Title</label>
                <input type="text" class="form-control" name="skill3" value="{{ $item->skill3 }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 3 Percentage</label>
                <input type="number" class="form-control" name="laravel" value="{{ $item->html_css }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 4 Title</label>
                <input type="text" class="form-control" name="skill4" value="{{ $item->skill4 }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 4 Percentage</label>
                <input type="number" class="form-control" name="wordpress" value="{{ $item->wordpress }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">creative design</label>
                <textarea type="text" class="form-control" name="design" rows="3" value="{{ $item->design }}"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">wordpress themes</label>
                <textarea type="text" class="form-control" name="themes" rows="3" value="{{ $item->themes }}"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">user experience</label>
                <textarea type="text" class="form-control" name="user_experience" rows="3" value="{{ $item->user_experience }}"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">unlimited support</label>
                <textarea type="text" class="form-control" name="support" rows="3" value="{{ $item->support }}"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">company</label>
                <textarea type="text" class="form-control" name="company" rows="3" value="{{ $item->company }}"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <a type="submit" href="{{ route('index') }}" class="btn btn-primary">Back</a>
        </tr>
    @endforeach
    </tbody>
</form>

</body>
</html>
