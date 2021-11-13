@foreach ($errors->all() as $error)
    <div class="error">{{ $error }}</div>
@endforeach
 
<form action="{{ route('register') }}" method="post">
    @csrf
 
    <input type="text" name="first_name" value="{{ old('first_name') }}">

    <input type="text" name="last_name" value="{{ old('last_name') }}">
 
    <input type="email" name="email" value="{{ old('email') }}">
 
    <input type="password" name="password" value="">
 
    <input type="password" name="password_confirmation" value="">
 
    <button>Register</button>
 
</form>