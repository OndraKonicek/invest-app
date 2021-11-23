@extends('layouts/main')

@section('content')

<div class="wrapper_dashboard">

        <section class="dashboard_section">

            <h1>Your Portfolio</h1>
            <br>
            <h3>{$current value}</h3>
            <br>
            <a href="/cryptoDerivatives"> 
                <button class="invest-btn">Invest now</button>
            </a>
            <br>
            <br>
            <div id="root"></div>
            <script src="/js/chart.js"></script>
            
        </section>
        
</div>

@endsection

