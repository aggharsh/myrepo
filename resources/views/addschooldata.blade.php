<div>
    <center>
   <h1>ADD NEW STUDENT DATA</h1>
   <form action="school" method="post">
    @csrf
    <label for="name">NAME</label>
    <br>
    <input type="text" name="name" placeholder="Enter name" required>
    <br>
    <br>
    <label for="email">EMAIL</label>
    <br>
    <input type="email" name="email" placeholder="Enter email" required>
    <br>
    <br>
    <label for="phonenumber">PHONE NUMBER</label>
    <br>
    <input type="phonenumber" name="phonenumber" placeholder="Enter phone number" required>
    <br>
    <br>
    <label for="class">CLASS</label>
    <br>
    <input type="text" name="class" placeholder="Enter class" required>
    <br>
    <br>
    <label for="password">PASSWORD</label>
    <br>
    <input type="password" name="password" placeholder="Enter password" required>
    <br>
    <br>
    <button>SUBMIT</button>
   </form>
   </center>
</div>
