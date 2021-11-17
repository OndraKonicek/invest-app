<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{mix('css/app.css')}}">
   <title>Invest App</title>
</head>

<body class="login-body">

   <div class="login-form">

      <form action="{{ route('login') }}" method="post">
         @csrf
            <label class="email-label">Email</label><br/>
         <input class="email-input" type="email" name="email" value="konovina@gmail.com"><br/><br/>
            <label class="password-label">Password</label><br/>
         <input class="password-input" type="password" name="password" value="ondrejondrej"><br/><br/>
      
         <button class="login-button">Login</button><br />

         <a href="/register">Register</a>
   
      </form>

   </div>
</body>
</html>



