<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invest App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            {{-- <a href="/admin">Users</a> --}}
                        
                            @if( Request::path() == 'admin' ) 
                                <a href="/admin" style="background-color: snow; color: #00a7e1">Users</a>

                            @else <a href="/admin">Users</a>

                            @endif

                            {{-- <a href="/admin/transactions">Transactions</a> --}}

                            @if( Request::path() == 'admin/transactions' ) 
                                <a href="/admin/transactions" style="background-color: snow; color: #00a7e1">Transactions</a>

                            @else <a href="/admin/transactions">Transactions</a>

                            @endif

                            {{-- @if( Request::path() == 'cryptoDerivatives' ) 
                                <a href="/cryptoDerivatives" style="background-color: snow; color: #00a7e1">Crypto Derivatives</a>
                        
                            @else <a href="/cryptoDerivatives">Crypto Derivatives</a>
                        
                            @endif --}}

                            @if( Request::path() == 'about' ) 
                                <a href="/about" style="background-color: snow; color: #00a7e1">About Us</a>
                        
                            @else <a href="/about">About Us</a>
                        
                            @endif

                        @elseif (Auth::user()->hasRole('investor'))
                        
                            @if( Request::path() == 'dashboard' ) 
                                <a href="/dashboard" style="background-color: snow; color: #00a7e1">Portfolio</a>
                            @else <a href="/dashboard">Portfolio</a>

                            @endif

                            @if( Request::path() == 'history' ) 
                                <a href="/history" style="background-color: snow; color: #00a7e1">History</a>
                        
                            @else <a href="/history">History</a>
                        
                            @endif

                            {{-- @if( Request::path() == 'cryptoDerivatives' ) 
                                <a href="/cryptoDerivatives" style="background-color: snow; color: #00a7e1">Crypto Derivatives</a>
                        
                            @else <a href="/cryptoDerivatives">Crypto Derivatives</a>
                        
                            @endif --}}

                            @if( Request::path() == 'about' ) 
                                <a href="/about" style="background-color: snow; color: #00a7e1">About Us</a>
                        
                            @else <a href="/about">About Us</a>
                        
                            @endif

                        @endif

                        {{-- @if (<a href="/dashboard">Dashboard</a> === true) {
                            return <a href="/dashboard" style="background-color: snow; color: blue">Dashboard</a>
                        } else <a href="/dashboard">Dashboard</a>; --}}
                
                    </div>
                
                    <div class="dropdown">

                        <button class="dropbtn">{{Auth::user()->first_name}} {{Auth::user()->last_name}}
                            <i class="fa fa-caret-down"></i>
                        </button>

                        <div class="dropdown-content">
                            
                            @if (Auth::user()->hasRole('investor'))
                                {{-- <a href="/cryptoDerivatives">Deposit Now</a>
                                <a href="/withdrawals">Withdrawals</a> --}}
                                <a href="/my-account">My account</a>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="logout-button">Logout</button>
                                </form>
                            @else 
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="logout-button">Logout</button>
                                </form>
                            @endif

                        </div>
                    </div> 
                @endif
        </div>
    </div>

    @yield('content')

    <footer class="footer">
        <small> Siance &copy; </small> &nbsp; <small id="year"></small>   
    </footer>

    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>

</body>
</html>
