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
    <form method="post" action="{{ route('store') }}"  enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail">Name</label>
                <input type="text" class="form-control" name="name" placeholder="name *" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">age</label>
                <input type="number" class="form-control" name="age" required="required">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea type="text" class="form-control" name="description" rows="3" required="required"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Introduce</label>
                <textarea type="text" class="form-control" name="introduce" rows="3" required="required"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Address</label>
                <input type="text" class="form-control" name="address" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="text" class="form-control" name="email" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Phone</label>
                <input type="text" class="form-control" name="phone" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Experience</label>
                <input type="number" class="form-control" name="experience" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Avatar</label>
                <input type="file" class="form-control" name="avatar" required="required">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail">Skill 1 Title</label>
                <input type="text" class="form-control" name="skill1" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 1 Percentage</label>
                <input type="number" class="form-control" name="html_css" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 2 Title</label>
                <input type="text" class="form-control" name="skill2" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 2 Percentage</label>
                <input type="number" class="form-control" name="php" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 3 Title</label>
                <input type="text" class="form-control" name="skill3" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 3 Percentage</label>
                <input type="number" class="form-control" name="laravel" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 4 Title</label>
                <input type="text" class="form-control" name="skill4" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Skill 4 Percentage</label>
                <input type="number" class="form-control" name="wordpress" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Creative Design</label>
                <input type="text" class="form-control" name="creative_design" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Wordpress Themes</label>
                <input type="text" class="form-control" name="wordpress_themes" required="required">
            </div>


        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail">creative design</label>
                <textarea type="text" class="form-control" name="design" rows="3" required="required"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">wordpress themes</label>
                <textarea type="text" class="form-control" name="themes" rows="3" required="required"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">user experience</label>
                <textarea type="text" class="form-control" name="user_experience" rows="3" required="required"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">unlimited support</label>
                <textarea type="text" class="form-control" name="support" rows="3" required="required"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">company</label>
                <textarea type="text" class="form-control" name="company" rows="3" required="required"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">User Experiences</label>
                <input type="text" class="form-control" name="user_experiences" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Unlimited Support</label>
                <input type="text" class="form-control" name="unlimited_support" required="required">
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
