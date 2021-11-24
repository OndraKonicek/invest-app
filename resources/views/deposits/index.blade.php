@extends('layouts/main')

@section('content')
    <div class="wrapper_deposits">
        <section class="deposits_section">

            <h1>Deposit Now</h1>

            <form action="/deposits" method="post">
                @csrf
                <label for="deposit">Amount:</label><br>
                <input class=deposit-amount-input type="text" id="deposit" name="amount" placeholder="Your Deposit" required><br>
                <input class="deposit-btn" type="submit" value="Confirm Deposit"><br>
            </form>
            <br>
    
            @if (Session::has('success_message'))
                <div class="alert alert-success">
                    {{ Session::get('success_message') }}
                </div>
            @endif

        </section>

        {{-- <script src="{{ mix('js/deposits-popup.js')}}"></script> --}}

    </div>
@endsection
