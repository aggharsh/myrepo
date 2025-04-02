<div>
    <center>
    <h1>My First checkbox</h1>
    <form method="post" action="otherform">

        @csrf  <!-- Show error 419 use token(CSRF Token) -->
        <div>
            <h5>SKILL</h5>
            <input type="checkbox" name="skill[]" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="java">
            <label for="java">JAVA</label>
            <input type="checkbox" name="skill[]" id="html" value="html">
            <label for="html">HTML</label>
            <input type="checkbox" name="skill[]" id="css" value="css">
            <label for="css">CSS</label>
            <span style="color:red">@error('skill'){{$message}}@enderror</span>
        </div>

        <div>
            <h5>GENDER</h5>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">MALE</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">FEMALE</label>
            <span style="color:red">@error('gender'){{$message}}@enderror</span>
        </div>
        <div>
            <h5>CITY</h5>
           <select name="city" required>
               <option value="DELHI">DELHI</option>
               <option value="NODIA">NODIA</option>
               <option value="HARAYANA">HARAYANA</option>
               <option value="FARIDABAD">FARIDABAD</option>
              </select>
              <span style="color:red">@error('City'){{$message}}@enderror</span>
        </div>
        <div>
            <h5>AGE</h5>
            <input type="range" name="age" min="20" max="34">
            <label for="age">AGE</label>
            <span style="color:red">@error('age'){{$message}}@enderror</span>
        </div>
        <div>
           <button>ADD NEW DATA</button>
        </div>
    </form>
    </center>
</div>