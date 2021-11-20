@extends('layouts/main')

@section('content')

<h1>Withdrawals</h1>
  <br>

    <h3>Balanced portfolio</h3>
 
   
    <form action="/withdrawals" method="post">
            @csrf

        <label for="withdrawal">Value:</label>
        <br>
        <input type="text" id="withdrawal" name="amount" required>
        <br>
    
        <input type="submit" value="Send">
    </form>

    <br>
    
    @if (Session::has('success_message'))

        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>

    @endif


    {{-- @if($user->date_approved == null)
        uzitele musi povolit admin
    @else
        {{dd($user)}}
    @endif --}}

@endsection