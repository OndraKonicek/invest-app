@extends('layouts/main')

@section('content')

<div class="admin-dashboard">
    <h1>Admin Dashboard</h1>
</div>
    <div class="admin-list">
        User's List - Users waiting for an approval.
    </div>
    <br>


<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
           <td>{{ $user->first_name }} {{ $user->last_name }}</td>  
           <td>{{ $user->email }} </td>

            <td>
                <div class="action">
                    @if ($user->date_approved == null)
                    <form action="{{ action('Admin\UserController@approve', $user->id) }}" method="post">
                        @csrf
                        <button>Accept</button> 
                    </form>
                    
                    <form action="{{ action('Admin\UserController@deny', $user->id) }}" method="post">
                        @csrf
                        <button>Denied</button> 
                    </form>
                    </div>
                    @else 
        
                    Date approved: {{$user->date_approved}}
        
                    @endif
                
            </td>
        </tr>
        </tbody>
    @endforeach
    </table>


  
@endsection