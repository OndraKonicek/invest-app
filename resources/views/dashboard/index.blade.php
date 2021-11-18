@extends('layouts/main')

@section('content')


@can('investor')
    <h1>Dashboard</h1>

    <div>Name: {{Auth::user()->first_name}} {{Auth::user()->last_name}}</div>

    {{-- {{dd($user)}} --}}

@endcan
    
@endsection

