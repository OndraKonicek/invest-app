@extends('layouts/main')

@section('content')

    <div class="content-wrapper wrapper_approval">
        <section class="approval_section">
            <h1>Hi {{Auth::user()->first_name}}</h1>
            <h2>Your account has been succesfully created</h2> 
            <p>Your account is now awaiting to be approved by an administrator. We will notify by email as soon as your account will be approved.</p>
        </section>
    </div>
    
@endsection

