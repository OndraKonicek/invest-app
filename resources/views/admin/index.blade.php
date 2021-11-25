@extends('layouts/main')

@section('content')
    <div class="content-wrapper admin-users-wrapper">

        <div class="admin-user-top-section">
            <h1>Users</h1>
        </div>
        
            
            {{-- User's List - Users waiting for an approval. --}}
        
        
        <div class="admin-users-table-wrapper">
            <h3>List of users</h3>
            <table class="admin-users-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date approved</th>
                        <th></th>

                    </tr>
                </thead>
            
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>  
                            <td>{{ $user->email }} </td>
                            <td>{{$user->date_approved}}</td>
                            <td>
                                <div class="action">
                                    @if ($user->date_approved == null)
                                        <form action="{{ action('Admin\UserController@approve', $user->id) }}" method="post">
                                            @csrf
                                            <button class="accept-btn">Accept</button> 
                                        </form>
                                        
                                        <form action="{{ action('Admin\UserController@deny', $user->id) }}" method="post">
                                            @csrf
                                            <button class="deny-btn">Deny</button> 
                                        </form>
                                    @else
                                        <div></div>
                                    @endif
                                </div>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>   
            </table>
        </div>
    </div>
@endsection