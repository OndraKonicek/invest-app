@extends('layouts/main')

@section('content')

    @if($user->date_approved == null)
        uzitele musi povolit admin
    @else
        {{dd($user)}}
    @endif

    
    
@endsection

