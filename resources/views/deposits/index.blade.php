@extends('layouts/main')

@section('content')

    <div class="wrapper_deposits">

        <section class="deposits_section">

            <h1>Deposits</h1>

            <h3>Balanced portfolio</h3>    

 
   
    <form action="/deposits" method="post">
            @csrf

        <label for="deposit">Value:</label>
        <br>
        <input type="text" id="deposit" name="amount" required>
        <br>
    
        <input type="submit" value="Send">
    </form>

    </section>

    </div>

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
