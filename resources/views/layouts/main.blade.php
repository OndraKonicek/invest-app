<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Book project</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>




    <div style="border: 1px solid black;">
        @if(Auth :: user () == null)
            <a href="/login">Login</a>
            <a href="/register">Register</a>
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
