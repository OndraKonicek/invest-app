@extends('layouts/main')

@section('content')

    <div class="admin-dashboard">
        <h1>Admin Dashboard</h1>
    </div>

    <div class="admin-list">
        List of pending user's deposits requests
    </div>
    <br>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Deposit</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($deposits as $deposit)
                <tr>
                    <td>{{ $deposit->user->first_name }} {{ $deposit->user->last_name }}</td>  
                    <td>{{ $deposit->user->email }} </td>
                    <td>{{ $deposit->amount }}</td>
                    <td>
                        <div class="action">
                            @if ($deposit->status == 'Pending')
                                <form action="{{action('Admin\PendingTransactionController@complete', $deposit->id)}}"  method="post">
                                    @csrf
                                    <button>Complete</button> 
                                </form>
                                
                                <form action="{{ action('Admin\PendingTransactionController@deny', $deposit->id) }}" method="post">
                                    @csrf
                                    <button>Denied</button> 
                                </form>
                            @endif
                        </div>
          
                        {{-- Completed: {{$deposit->date}} --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
                     

    </table>

    <br>
    <br>


     <div class="admin-list">
        List of pending user's withdrawals requests
    </div>
    <br>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Withdrawal</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($withdrawals as $withdrawal)
                <tr>
                    <td>{{ $withdrawal->user->first_name }} {{ $withdrawal->user->last_name }}</td>  
                    <td>{{ $withdrawal->user->email }} </td>
                    <td>{{ $withdrawal->amount }}</td>
                    <td>
                        <div class="action">
                            @if ($withdrawal->status == 'Pending')
                                <form action="{{action('Admin\PendingTransactionController@complete', $withdrawal->id)}}"  method="post">
                                    @csrf
                                    <button>Complete</button> 
                                </form>
                                
                                <form action="{{ action('Admin\PendingTransactionController@deny', $withdrawal->id) }}" method="post">
                                    @csrf
                                    <button>Denied</button> 
                                </form>
                            @endif
                        </div>
          
                        {{-- Completed: {{$deposit->date}} --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  

                 {{-- @if (Session::has('success_message'))

        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>

    @endif --}}
@endsection