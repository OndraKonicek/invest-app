@extends('layouts/main')

@section('content')


@can('investor')
        <h1>Dashboard</h1>
    
    
            <div>Name: {{Auth::user()->first_name}} {{Auth::user()->last_name}}</div>
    
            <br>
        
        
            <a href="/deposits"> 
                <button>Invest now!</button>
            </a>
      
    
    {{-- {{dd($user)}} --}}

@endcan
    
@endsection

