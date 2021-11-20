@extends('layouts/main')

@section('content')


@can('investor')

    <h1>Dashboard</h1>
    
    
            <h3>Name: {{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3>
    
            <br>
        
        
            <a href="/deposits"> 
                <button>Invest now</button>
            </a>

            <a href="/withdrawals"> 
                <button>Withdrawals</button>
            </a>

    <div id="root"></div>

    <script src="/js/chart.js"></script>
    
    {{-- {{dd($user)}} --}}

@endcan
    
@endsection

