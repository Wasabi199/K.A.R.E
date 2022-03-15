<!DOCTYPE html>
<html>
  <?php 
  include '../includes/dbconfig.php';
  ?>
    <head>
    <link rel="stylesheet" href="../Css/register.css">
    </head>
    <body>
    <form action="Register.php" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>E-mail</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="email"><b>First Name</b></label>
    <input type="text" placeholder="Enter Email" name="first_name" required>

    <label for="email"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Email" name="last_name" required>

    <label for="email"><b>Address</b></label>
    <input type="text" placeholder="Enter Email" name="address" required>

    <label for="email"><b>Contact</b></label>
    <input type="text" placeholder="Enter Email" name="contact" required>

    <label for="Questions"><b>Choose a Question:</b></label>
    <br>
        <select name="question" id="question"  class="questions">
        <option value="What was your favorite school teacher’s name?">What was your favorite school teacher’s name?</option>
        <option value="What’s your favorite movie?">What’s your favorite movie?</option>
        <option value="What was your first car?">What was your first car?</option>
        <option value="What is your oldest sibling’s middle name?">What is your oldest sibling’s middle name?</option>
        <option value="What was the first concert you attended?">What was the first concert you attended?</option>
        <option value="What was the make and model of your first car?">What was the make and model of your first car?</option>
        <option value="In what city or town did your parents meet?">In what city or town did your parents meet?</option>
        </select>
    <br>

        <label for="ans" ><b>Answer</b></label>
        <input type="password" placeholder="Answer" name="answer" required>


    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="confirm_password" required>

  
    <div class="clearfix">
    <a class="backBtn" href="#"><button type="button" class="cancelbtn">Back</button></a>
      <button type="submit" class="signupbtn" name="signupBtn">Sign Up</button>
    </div>
  </div>
</form>
    </body>
    <?php
    $auth = $firebase->createAuth();

    if(isset($_POST['signupBtn'])){
      session_start();
      $email = $_POST['email'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $address = $_POST['address'];
      $contact = $_POST['contact'];
      $question = $_POST['question'];
      $answer = $_POST['answer'];
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];

      $userAuth = [
        'email'=>$email,
        'emailVerified'=>false,
        'password'=>$password,
      ];

      if($password == $confirm_password){
        try{
          $createUser = $auth->createUser($userAuth);

          $database->getReference('User')->update(
            [
              $createUser->uid=>[
                'info'=>[
                  'fname'=>$first_name,
                  'lname'=>$last_name,
                  'address'=>$address,
                  'contact'=>$contact,
                  'question'=>$question,
                  'answer'=>$answer
                ],
              ],
            ],
          );
          $auth->sendEmailVerificationLink($email);
          echo '<script>alert("Successfully Registered! Please check your inbox for your email verification link!")</script>';
        }catch(Exception $e){
          echo '<script>alert("'.$e->getMessage().'")</script>';
        }
      }else{
        echo '<script>alert("Password not Match:)</script>';
      }
    }
    ?>
</html>