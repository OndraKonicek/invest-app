@extends('layouts/main')

@section('content')


@can('investor')

<div class="wrapper_dashboard">

    <section class="dashboard_section">

        <h1>Dashboard</h1>
    
    
            <div>Name: {{Auth::user()->first_name}} {{Auth::user()->last_name}}</div>
    
            <br>
        
        
            <a href="/deposits"> 
                <button>Invest now!</button>
            </a>

    </section>

</div>
    
    {{-- {{dd($user)}} --}}

@endcan
    
@endsection

