@extends('layouts/main')

@section('content')

<h1>Admin Dashboard</h1>

User's List - Users waiting for an approval.

<ul>
    @foreach ($users as $user)
        <li>
            <p>{{ $user->first_name }} {{ $user->last_name }}, {{ $user->email }} <button>Accept</button> <button>Denied</button> </p>
        </li>
    @endforeach
</ul>
  
@endsection