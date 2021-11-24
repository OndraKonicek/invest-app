@extends('layouts/main')
@section('content')
    <div class="wrapper-withdrawals">
        {{-- <section class="withdrawals_section">
            <h1>Withdrawals</h1>
        </section> --}}
        <section class="withdrawals_content">
            <div class="form-section">
            <h1>Withdrawals</h1>
                <form action="/withdrawals" method="post">
                @csrf
                <label for="withdrawal">Amount:</label>
                <br>
                <input class="withdrawal-amount-input" class="deposit-input" type="number" id="withdrawal" name="amount" required placeholder="Amount">
                <br><br>
                <input class="withdrawal-btn" class="deposit-button" type="submit" value="Confirm Withdrawal">
            </form><br />
            @if (Session::has('success_message'))
                <div class="alert alert-success">
                    {{ Session::get('success_message') }}
                </div>
            @endif
            </div>
            <br>
        </section>
    </div>
@endsection