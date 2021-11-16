@extends('layouts/main')

@section('content')


@can('investor')
    <h1>Dashboard</h1>

    {{-- {{dd($user)}} --}}

@endcan
    
@endsection

