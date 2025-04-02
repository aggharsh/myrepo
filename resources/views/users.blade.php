<div>
    <center>
        <h1>TABLE CONNECT WITH DB</h1>
<table border="2px solid black">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>EMAIL</td>
        <td>PHONE</td>
        <td>UPDATE</td>
        <td>DELETE</td>
        @php $count = 1; @endphp
        @foreach ($ABC as $users)
        <tr>
            <td>{{ $count++ }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->phoneno}}</td>
            <td>
        <a href="about">UPDATE</a>
        </td>
        <td>
        <a href="home">DELETE</a>
        </td>
        </tr>
        @endforeach
        
    </tr>
</table>
    </center>
</div>
