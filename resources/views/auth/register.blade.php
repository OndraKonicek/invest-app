<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>Registration</title>
</head>

<body class="regitration-body">

    @foreach ($errors->all() as $error)
        <div class="error">{{ $error }}</div>
    @endforeach
 
    <div class="registration-form">
        <h1>Register</h1>

        <form action="{{ route('register') }}" method="post">
            @csrf
            First Name<br/>
            <input class="register-input" type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name"><br/><br/>
            Last Name<br/>
            <input class="register-input" type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name"><br/><br/>
            Email<br/>
            <input class="register-input" type="email" name="email" value="{{ old('email') }}" placeholder="Email"><br/><br/>
            Password<br/>
            <input class="register-input" type="password" name="password" value="" placeholder="Password"><br/><br/>
            Confirm Password<br/>
            <input class="register-input" type="password" name="password_confirmation" value="" placeholder="Confirm Password"><br/><br/>
        
            <button class="register-button">Register</button><br />
            <a href="/login">Login</a>
    
        </form>

    </div>

</body>
</html>