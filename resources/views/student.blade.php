<div>
    <h1>Student Data</h1>
    <table border="2ps solid black">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone Number</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phonenumber }}</td>
        </tr>
        @endforeach
    </table>
</div>
