@extends('layouts/main')

@section('content')

    <div class="wrapper_deposits">

        <section class="deposits_section">

            <h1>Deposits</h1>

            <h3>Balanced portfolio</h3>

            <form action="" method="post">
                    @csrf
                <label for="deposit">Amount:</label>
                <input type="text" id="deposit">
            
                <input type="submit">
            </form>

            {{-- @if($user->date_approved == null)
                uzitele musi povolit admin
            @else
                {{dd($user)}}
            @endif --}}

        </section>

    </div>
@endsection
