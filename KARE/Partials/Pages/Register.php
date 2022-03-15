<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../Css/register.css">
    </head>
    <body>
    <form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>E-mail</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="email"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="email"><b>Address</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="email"><b>Contact</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="Questions"><b>Choose a Question:</b></label>
    <br>
        <select name="question" id="question" form="questions" class="questions">
        <option value="1">What was your favorite school teacher’s name?</option>
        <option value="2">What’s your favorite movie?</option>
        <option value="3">What was your first car?</option>
        <option value="4">What is your oldest sibling’s middle name?</option>
        <option value="5">What was the first concert you attended?</option>
        <option value="6">What was the make and model of your first car?</option>
        <option value="7">In what city or town did your parents meet?</option>
        </select><br>

        <label for="psw"><b>Answer</b></label>
        <input type="password" placeholder="Answer" name="ans" required>


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

  
    <div class="clearfix">
    <a class="backBtn" href="#"><button type="button" class="cancelbtn">Back</button></a>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
    </body>
</html>