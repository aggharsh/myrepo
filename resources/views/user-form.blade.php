<div>
    <center>
    <form method="post" action="submit">

        @csrf  <!-- Show error 419 use token(CSRF Token) -->


    <div>
        <spam>My First Form</spam><br><br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <span style="color:red">@error('name'){{$message}}@enderror</span>
        </div>
        <div>
        <label for="Email">Email:</label>
        <input type="text" name="Email" id="Email" placeholder="Enter your Email">
        <span style="color:red">@error('Email'){{$message}}@enderror</span>
        </div>
        <div>
        <label for="City">City:</label>
        <input type="text" name="City" id="City" placeholder="Enter your CIty">
        <span style="color:red">@error('City'){{$message}}@enderror</span>
    </div>
    <div>
        <button>Add Data</button>
    </div>
    </form>
    </center>
</div>

<style>
    input{
        width: 50%;
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    button{
        width: 10%;
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }




</style>