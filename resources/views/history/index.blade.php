@extends('layouts/main')

@section('content')

    <div>
        <h1>Transaction History</h1>
        <h2>Deposits</h2>
        <table>
            <thead>
                <tr>
                    <th>
                        Date + Time
                    </th>
                    <th>
                        Transaction
                    </th>
                    <th>
                        CZK
                    </th>
                    <th>
                        EUR
                    </th>
                    <th>
                        USD
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach (Auth::user()->deposits as $deposit)
                <tr>
                    <td>{{$deposit->time}}</td>
                    <td>Deposit</td>
                    <td> - {{$deposit->amount}}</td>
                    <td> - {{($deposit->amount / 25.23)}} </td>
                    <td> - {{$deposit->amount / 22.23}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
        <h2>Withdrawals</h2>
        <table>
            <thead>
                <tr>
                    <th>
                        Date + Time
                    </th>
                    <th>
                        Transaction
                    </th>
                    <th>
                        CZK
                    </th>
                    <th>
                        EUR
                    </th>
                    <th>
                        USD
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach (Auth::user()->withdrawals as $withdrawal)
                <tr>
                    <td>{{$withdrawal->time}}</td>
                    <td>Withdrawal</td>
                    <td> + {{$withdrawal->amount}}</td>
                    <td> + {{$withdrawal->amount / 25.23}}</td>
                    <td> + {{$withdrawal->amount / 22.23}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection