<div>
    <center>
   <h1>UPDATE DATA</h1>
   <form action="/edit/{{$list->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put"> 
    <label for="name">NAME</label>
    <br>
    <input type="text" name="name" value="{{$list->name}}" placeholder="Enter name" required>
    <br>
    <br>
    <label for="email">EMAIL</label>
    <br>
    <input type="email" name="email"  value="{{ $list->email }}" placeholder="Enter email" required>
    <br>
    <br>
    <label for="phonenumber">PHONE NUMBER</label>
    <br>
    <input type="phonenumber" name="phonenumber" value="{{ $list->phonenumber }}"  placeholder="Enter phone number" required>
    <br>
    <br>
    <label for="class">CLASS</label>
    <br>
    <input type="text" name="class" value="{{ $list->class }}"  placeholder="Enter class" required>
    <br>
    <br>
    <label for="password">PASSWORD</label>
    <br>
    <input type="password" name="password" value="{{ $list->password }}"  placeholder="Enter password" required>
    <br>
    <br>
    <button>update</button>
   </form>
   <a href="/li">CANCLE UPDATE</a>
   </center>
</div>
