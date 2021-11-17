<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>Registration</title>
</head>
<body>
    @foreach ($errors->all() as $error)
    <div class="error">{{ $error }}</div>
@endforeach
 
<div class="registration-form">

    <form action="{{ route('register') }}" method="post">
    @csrf
     First Name<br/>
    <input type="text" name="first_name" value="{{ old('first_name') }}"><br/><br/>
     Last Name<br/>
    <input type="text" name="last_name" value="{{ old('last_name') }}"><br/><br/>
     Email<br/>
    <input type="email" name="email" value="{{ old('email') }}"><br/><br/>
     Password<br/>
    <input type="password" name="password" value=""><br/><br/>
     Confirm Password<br/>
    <input type="password" name="password_confirmation" value=""><br/><br/>
 
    <button>Register</button>
 
</form>

</div>
</body>
</html>