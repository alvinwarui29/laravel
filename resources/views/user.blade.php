<form action="/" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter your name"/><br/><br/>
    <input type="password" name="password" placeholder="Enter your password"/><br/><br/>
    <button type="submit">Login</button>

</form>