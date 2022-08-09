<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row" style="margin-top:45px">
<div class="col-md-4 col-md-offset-4">
    <h4>Register</h4><hr>
    <form action="{{ route('auth.save') }}" method="post">
        @csrf
    <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="userfname" required placeholder="Enter First Name" value="{{ old('userfname') }}">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="userlname" required placeholder="Enter Last Name" value="{{ old('userlname') }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" required placeholder="Enter email address">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="userpassword" required placeholder="Enter password">
            @error('password')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" required placeholder="Enter password confirmation">
            @error('password')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
        <br>
        <a href="{{ route('auth.login') }}">I already have an account, Sign In</a>
    </form>
</div>
</div>
</div>
</body>
</html>