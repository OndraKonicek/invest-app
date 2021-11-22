@extends('layouts/main')

@section('content')




 
<div class="wrapper_dashboard">

    <section class="dashboard_section">

        <h1>Dashboard</h1>
    
    
            <h3>Name: {{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3>
    
            <br>

            <a href="/cryptoDerivatives"> 
                <button class="invest-btn">Invest now</button>
            </a>

            
                <div id="root"></div>
    
                <script src="/js/chart.js"></script>
          
    </section>
    
</div>
    
    {{-- {{dd($user)}} --}}

    
@endsection

