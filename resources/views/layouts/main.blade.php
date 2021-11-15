<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Invest App</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body>




    <div class="login-register">

        {{-- pokud je uzivatel null zobrazi se login/register jinak se zobrazi logout --}}
        @if(Auth :: user () == null)
            <div class="login-register-btn">
                <a class="login__btn" href="/login">Login</a>
                <a class="register__btn" href="/register">Register</a>
            </div>
        @else
            <form action="{{ route('logout') }}" method="post">
            @csrf
            <button>Logout</button>
            </form>
        @endif
        
    </div>


    
    
    @yield('content')

</body>
</html>
