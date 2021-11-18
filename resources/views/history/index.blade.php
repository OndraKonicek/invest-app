@extends('layouts/main')

@section('content')

    <h1>Transaction History</h1>

    <table>
        <thead>
            <tr>
                <th>
                    Date
                </th>
                <th>
                    Transaction type
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

            {{-- {{Auth::user()->account_values->value}} --}}

            {{-- @foreach ($accountValues->user as $user)
            {{$user->value}}
                
            @endforeach --}}
            {{-- @foreach ($user->accountValues as $account_value)
             {{$account_value->value}}
             @endforeach --}}
       
            <tr>
                {{-- <td>{{$accountvalue->value}}</td>
                @endforeach --}}
                {{-- @foreach ($account_values as $accountvalue)       --}}
        
                {{-- <td>{{$accountvalue->value}}</td>
                @endforeach --}}
                
                {{-- <td>{{Auth::user('users')->join('account_values', 'users.id', '=', 'account_values.user_id')->select(['users.*', 'account_values.value'])}}</td> --}}
                <td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>


            </tr>

        </tbody>
    </table>
    {{-- @if($user->date_approved == null)
        uzitele musi povolit admin
    @else
        {{dd($user)}}
    @endif --}}
  
@endsection