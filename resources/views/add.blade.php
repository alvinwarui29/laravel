<h1>Welcome to our page</h1>
@if(session('username'))
<h3 style="color:green">{{session('username')}} has been registered </h3>
@endif

<form method="POST" action="user">
    @csrf
    <input type="text" name="username"/><br/><br/>
    <input type="password" name="username"/><br/><br/>
    <button >send</button>
</form>