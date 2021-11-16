@extends('layouts/main')

@section('content')

<h1>Admin Dashboard</h1>

User's List - Users waiting for an approval.

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->first_name }} {{ $user->last_name }}, {{ $user->email }} 
            
            <form action="{{ action('Admin\UserController@approve', $user->id) }}" method="post">
                @csrf
                <button>Accept</button> 
            </form>
            
            <form action="{{ action('Admin\UserController@deny', $user->id) }}" method="post">
                @csrf
                <button>Denied</button> 
            </form>
           
        </li>
    @endforeach
</ul>


  
@endsection