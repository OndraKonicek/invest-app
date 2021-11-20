@extends('layouts/main')

@section('content')


@can('investor')

<div class="wrapper_dashboard">

    <section class="dashboard_section">

        <h1>Dashboard</h1>
    
    
            <div>Name: {{Auth::user()->first_name}} {{Auth::user()->last_name}}</div>
    
            <br>
        
        
            
                <button class="invest-btn">Invest now</button>
            

    </section>

</div>
    
    {{-- {{dd($user)}} --}}

@endcan
    
@endsection

