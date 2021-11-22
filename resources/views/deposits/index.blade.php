@extends('layouts/main')

@section('content')

    <div class="wrapper_deposits">

        <section class="deposits_section">

            <h1>Deposit Now</h1>

            <h3>Balanced portfolio</h3>    

            <form action="/deposits" method="post">
                    @csrf
                <label for="deposit">Amount:</label>
                <br>
                <input type="text" id="deposit" name="amount" required>
                <br>
                <input type="submit" value="Confirm Deposit">
            </form>

        </section>

    </div>

    <br>
    
    @if (Session::has('success_message'))

        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>

    @endif

@endsection
