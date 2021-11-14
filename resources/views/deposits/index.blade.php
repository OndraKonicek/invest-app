@extends('layouts/main')

@section('content')

    <h1>Deposits</h1>

    @if($user->date_approved == null)
        uzitele musi povolit admin
    @else
        {{dd($user)}}
    @endif
  
@endsection
