@extends('layouts/main')

@section('content')
<div class="admin-transactions-wrapper">

    <div class="admin-transactions-top-section">
        <h1>Transactions</h1>
    </div>

    <div class="admin-transactions-table-wrapper">
        <h3>List of pending user's deposits requests</h3>
        
        <table class="admin-transactions-table">
            <thead>
                <tr>
                    <th>Created at</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Deposit</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($deposits as $deposit)
                    <tr>
                        <td>{{ $deposit->time }}</td>
                        <td>{{ $deposit->user->first_name }} {{ $deposit->user->last_name }}</td>  
                        <td>{{ $deposit->user->email }} </td>
                        <td>{{ $deposit->amount }}</td>
                        <td>
                            <div class="action">
                                @if ($deposit->status == 'Pending')
                            <form action="{{action('Admin\PendingTransactionController@deposits', $deposit->id)}}"  method="post">
                                @csrf
                                <button class="complete-btn">Complete</button>
                            </form>
                            
                            <form action="{{ action('Admin\PendingTransactionController@denydeposits', $deposit->id) }}" method="post">
                                @csrf
                                <button class="deny-btn">Deny</button> 
                            </form>
                            @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="admin-transactions-middle-section">
    </div>

    <div class="admin-transactions-table-wrapper">
        <h3>List of pending user's withdrawals requests</h3>
        <table class="admin-transactions-table">
            <thead>
                <tr>
                    <th>Created at</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Withdrawal</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($withdrawals as $withdrawal)
                    <tr>
                        <td>{{ $withdrawal->time }}</td>
                        <td>{{ $withdrawal->user->first_name }} {{ $withdrawal->user->last_name }}</td>  
                        <td>{{ $withdrawal->user->email }} </td>
                        <td>{{ $withdrawal->amount }}</td>
                        <td>
                            <div class="action">
                                @if ($withdrawal->status == 'Pending')
                            <form action="{{action('Admin\PendingTransactionController@withdrawals', $withdrawal->id)}}"  method="post">
                                @csrf
                                <button class="complete-btn">Complete</button> 
                            </form>
                            
                            <form action="{{ action('Admin\PendingTransactionController@denywithdrawals', $withdrawal->id) }}" method="post">
                                @csrf
                                <button class="deny-btn">Deny</button> 
                            </form>
                            @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
                 {{-- @if (Session::has('success_message'))

        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>

    @endif --}}
</div>
@endsection