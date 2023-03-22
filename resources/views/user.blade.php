<h1>Login page</h1>

<form action="/" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter your name"/><br/><br/>
    <span style="color:red">@error('username') {{$message}} @enderror </span><br/><br/>
    <input type="password" name="password" placeholder="Enter your password"/><br/><br/>
    <span style="color:red">@error('password') {{$message}}@enderror </span><br/><br/>
    <button type="submit">Login</button>

</form>