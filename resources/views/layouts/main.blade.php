<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Invest App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body class="body">





    <div class="login-register">
        <div class="navigation-wrapper">
        {{-- pokud je uzivatel null zobrazi se login/register jinak se zobrazi logout --}}
            @if(Auth :: user () == null)
                <div class="login-register-btn">
                    <a class="login__btn" href="/login">Login</a>
                    <a class="register__btn" href="/register">Register</a>
                </div>
            @else
                <div class="navigation">  
                    @if (Auth::user()->hasRole('admin'))
                        <a href="/admin">Users</a>
                        
                
                    @elseif (Auth::user()->hasRole('investor'))
                
                        <a href="/dashboard">Dashboard</a>
                        <a href="/history">History</a>
                    
                    @endif

                    

                </div>
                
                
                <div class="dropdown">
                    <button class="dropbtn">{{Auth::user()->first_name}} {{Auth::user()->last_name}} 🔽 
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="/deposits">Deposits</a>
                    <a href="/withdrawals">Withdrawals</a>

                    <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="logout-button">Logout</button>
                    </form>

                    </div>
                </div> 
                

            @endif

        </div>

        
        
    </div>

    


    
    
    @yield('content')

</body>
</html>
