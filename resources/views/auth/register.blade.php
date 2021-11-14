@foreach ($errors->all() as $error)
    <div class="error">{{ $error }}</div>
@endforeach
 
<form action="{{ route('register') }}" method="post">
    @csrf
     First Name<br/>
    <input type="text" name="first_name" value="{{ old('first_name') }}"><br/><br/>
     Last Name<br/>
    <input type="text" name="last_name" value="{{ old('last_name') }}"><br/><br/>
     Email<br/>
    <input type="email" name="email" value="{{ old('email') }}"><br/><br/>
     Password<br/>
    <input type="password" name="password" value=""><br/><br/>
     Confirm Password<br/>
    <input type="password" name="password_confirmation" value=""><br/><br/>
 
    <button>Register</button>

    <a href="/login">Login</a>
 
</form>