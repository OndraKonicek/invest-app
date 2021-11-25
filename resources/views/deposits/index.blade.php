@extends('layouts/main')

@section('content')
    <div class="content-wrapper wrapper_deposits">
        <section class="deposits_content">
            <div class="form-section">
            <h1>Deposit Now</h1>

            <form action="/deposits" method="post">
                @csrf
                <label for="deposit">Amount:</label><br>
                <input class=deposit-amount-input type="number" id="deposit" name="amount" placeholder="Your Deposit" required>
                <br>
                <br>
                  <label for="full_name">Full Name:</label>
                <br>
                <input class="withdrawal-amount-input" class="deposit-input" type="text" id="full_name" name="full_name" required placeholder="Full Name">
                <br><br>
                <label for="card_number">Card Number:</label>
                <br>
                <input class="withdrawal-amount-input" class="deposit-input" type="number" id="card_number" name="card_number" required placeholder="- - - -   - - - -   - - - -   - - - -">
                <br><br>
                <label for="expiry_date">Expiry Date:</label>
                <br>
                <input class="withdrawal-amount-input" class="deposit-input" type="number" id="expiry_date" name="expiry_date" required placeholder="DD/MM/YYYY">
                <br><br>
                <label for="expiry_date">CVC:</label>
                <br>
                <input class="withdrawal-amount-input" class="deposit-input" type="number" id="CVC" name="CVC" required placeholder="- - -">
                
                <input class="deposit-btn" type="submit" value="Confirm Deposit"><br /><br />

                @if (Session::has('success_message'))
                <div class="alert alert-success">
                    {{ Session::get('success_message') }}
                </div>
                @endif
            </form>
            </div>
            <br>
    
            

        </section>

        {{-- <script src="{{ mix('js/deposits-popup.js')}}"></script> --}}

    </div>
@endsection
