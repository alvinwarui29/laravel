<h1>Welcome List</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>Location</td>
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}} </td>
        <td>{{$member['name']}}</td>
        <td>{{$member['location']}}</td>
    </tr>
    @endforeach

</table>