<div>
  <h1>STAFF DETAILS</h1>
  <table border="2px">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PHONE NUMBER</th>
        <th>ADDRESS</th>
    </tr>
    @php $count = 1; @endphp
    @foreach ($detail as $details)
    <tr>
        <th>{{ $count++ }}</th>
        <th>{{ $details->name }}</th>
        <th>{{ $details->phonenumber }}</th>
        <th>{{ $details->address }}</th>
    </tr>
    
    @endforeach
  </table>
</div>
