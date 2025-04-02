
@php
//DELETE Route method
@endphp

<div>
    <center>
    <h1>USER FORM</h1>
    <form action="/user" method="post">
        <input type="hidden" name="_method" value="delete">             
        @csrf
        <label for="name">NAME</label>
        <br>
        <input type="text" name="name" placeholder="Name">
        <br>
        <br>
        <label for="name">EMAIL</label>
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <br>
        <label for="name">PASSWORD</label>
        <br>
        <input type="text" name="password" placeholder="Password">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
    </center>
</div>

@php
//PUT Route method
@endphp
<!-- <div>
    <center>
    <h1>USER FORM</h1>
    <form action="/user" method="post">
        <input type="hidden" name="_method" value="put">                  
        @csrf
        <label for="name">NAME</label>
        <br>
        <input type="text" name="name" placeholder="Name">
        <br>
        <br>
        <label for="name">EMAIL</label>
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <br>
        <label for="name">PASSWORD</label>
        <br>
        <input type="text" name="password" placeholder="Password">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
    </center>
</div> -->

@php 
//POST Route method 
@endphp
<!-- <div>
    <center>
    <h1>USER FORM</h1>
    <form action="/user" method="post">                               
        @csrf
        <label for="name">NAME</label>
        <br>
        <input type="text" name="name" placeholder="Name">
        <br>
        <br>
        <label for="name">EMAIL</label>
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <br>
        <label for="name">PASSWORD</label>
        <br>
        <input type="text" name="password" placeholder="Password">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
    </center>
</div> -->

@php 
//GET Route method 
@endphp
<!-- <div>
    <center>
    <h1>USER FORM</h1>
    <form action="/user" method="get">                
        @csrf
        <label for="name">NAME</label>
        <br>
        <input type="text" name="name" placeholder="Name">
        <br>
        <br>
        <label for="name">EMAIL</label>
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <br>
        <label for="name">PASSWORD</label>
        <br>
        <input type="text" name="password" placeholder="Password">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
    </center>
</div> -->

@php 
//PATCH Route method 
@endphp
<!-- <div>
    <center>
    <h1>USER FORM</h1>
    <form action="/user" method="post">
    <input type="hidden" name="_method" value="patch">                 
        @csrf
        <label for="name">NAME</label>
        <br>
        <input type="text" name="name" placeholder="Name">
        <br>
        <br>
        <label for="name">EMAIL</label>
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <br>
        <label for="name">PASSWORD</label>
        <br>
        <input type="text" name="password" placeholder="Password">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
    </center>
</div> -->