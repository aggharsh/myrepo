<div>
    <h1>School Student List</h1>

    <form action="search" method="get">
        <input type="text" name="search" value="{{@$Ha}}" placeholder="Enter Name">
        <button>Search</button>
    </form>
    
    <form action="selectmulti" method="post">
        @csrf
        <button>DELETE</button>
    <table border="3px">
        <tr>
            <td>SELECT MULTI</td>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONENUMBER</th>
            <th>CLASS</th>
            <th>PASSWORD</th>
            <th>DELETE</th>
            <th>UPDATE</th>
            
        </tr>
        @php
        $count = 1;
        @endphp
        @foreach ($school as $ls)
        <tr>
            <td><input type="Checkbox" name="ids[]" value="{{$ls->id}}">
            <label>MultiDelete</label></td>
            <td>{{ $count++ }}</td>
            <td>{{ $ls->name }}</td>
            <td>{{ $ls->email }}</td>
            <td>{{ $ls->phonenumber }}</td>
            <td>{{ $ls->class }}</td>
            <td>{{ $ls->password }}</td>
            <td><a href="{{ 'delete/'.$ls->id }}">DELETE</a></td>
            <td><a href="{{ 'update/'.$ls->id }}">UPDATE</a></td>
        </tr>
        
        @endforeach
    </table>
    </form>
    <center>
    <a href="add">Add New Data</a>
    </center>

    {{ $school->Links() }}
    
</div>

<style>
    .w-5.h-5{
        width: 20px;                 
    }
</style>
