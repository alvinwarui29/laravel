<h1>Welcome List</h1>
<form method="POST" action="user">
    @csrf
    <input type="text" name="name"/>
    <input type="text" name="location"/>
    <button type="submit">add</button>

</form>