@extends('layouts/main')

@section('content')

<div class="content-wrapper wrapper_dashboard">

        <section class="dashboard_section">
            <h1>Your Portfolio</h1>
            <div class="dashboard-overview-section">
                <div class="investor-values">
                    <h3>Current value: <br><br>{{round($portfolioValue)}} CZK</h3>
                    <h3>Deposited: <br><br> {{$totalDeposit}} CZK</h3>
                    <h3>Withdrawed: <br><br> {{$totalWithdraw}} CZK</h3>
                </div>
                <div class="investor-btn">
                    <a href="/deposits"><button class="invest-btn">Invest Now</button></a>
                </div>
            </div>
            
            
            <br>
            <br>
            <div class="chart">
                <div id="root"></div>
                <script src="/js/chart.js"></script>
            </div>
            
        </section>
        
</div>

@endsection

