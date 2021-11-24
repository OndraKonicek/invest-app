@extends('layouts/main')

@section('content')

<div class="wrapper_dashboard">

        <section class="dashboard_section">

            <h1>Your Portfolio</h1>
            <br>
            <div>
                <h3>{{$portfolioValue}}</h3>
                <h3>{{$totalDeposit}}</h3>
                <h3>{{$totalWithdraw}}</h3>
            </div>
            <br>
            <a href="/cryptoDerivatives"> 
                <button class="invest-btn">Invest now</button>
            </a>
            <br>
            <br>
            <div class="chart">
                <div id="root"></div>
                <script src="/js/chart.js"></script>
            </div>
            
        </section>
        
</div>

@endsection

