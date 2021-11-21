@extends('layouts/main')

@section('content')

<div class="wrapper-withdrawals">

        <section class="withdrawals_section">

            <h1>Withdrawals</h1>

        </section>

    </div>


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