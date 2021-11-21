@extends('layouts/main')

@section('content')

    <div class="wrapper-withdrawals">

        <section class="withdrawals_section">

            <h1>Withdrawals</h1>

        </section>

        <section class="withdrawals_content">

        
            <h3>Balanced portfolio</h3>
        
        
            <form action="/withdrawals" method="post">
                @csrf

                <label for="withdrawal">Amount:</label>
                <br>
                <input class="deposit-input" type="number" id="withdrawal" name="amount" required placeholder="Amount">
                <br><br>

                <label for="full_name">Full Name:</label>
                <br>
                <input class="deposit-input" type="text" id="full_name" name="full_name" required placeholder="Full Name">
                <br><br>

                <label for="card_number">Card Number:</label>
                <br>
                <input class="deposit-input" type="text" id="card_number" name="card_number" required placeholder="- - - -   - - - -   - - - -   - - - -">
                <br><br>

                <label for="expiry_date">Expiry Date:</label>
                <br>
                <input class="deposit-input" type="date" id="expiry_date" name="expiry_date" required placeholder="DD/MM/YYYY">
                <br><br>

                <label for="expiry_date">CVC:</label>
                <br>
                <input class="deposit-input" type="text" id="CVC" name="CVC" required placeholder="- - -">
                <br> <br>
            
            
                <input class="deposit-button" type="submit" value="Confirm Withdrawal">
            </form>

            <br>
            
            @if (Session::has('success_message'))

                <div class="alert alert-success">
                    {{ Session::get('success_message') }}
                </div>

            @endif

        </section>


        {{-- @if($user->date_approved == null)
            uzitele musi povolit admin
        @else
            {{dd($user)}}
        @endif --}}
    </div> 

@endsection