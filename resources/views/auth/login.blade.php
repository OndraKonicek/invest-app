<form action="{{ route('login') }}" method="post">
    @csrf
 
    <input type="email" name="email" value="konovina@gmail.com">
 
    <input type="password" name="password" value="Hatatitla65">
 
    <button>Login</button>
 
</form>
