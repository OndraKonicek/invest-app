<form action="{{ route('login') }}" method="post">
    @csrf
       Email<br/>
    <input type="email" name="email" value="konovina@gmail.com"><br/><br/>
       Password<br/>
    <input type="password" name="password" value="ondrejondrej"><br/><br/>
 
    <button>Login</button>

    
    <a href="/register">Register</a>
 
</form>
