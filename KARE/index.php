<!DOCTYPE html>
<html>
  <head>
    <?php
    use Firebase\Auth\Token\Exception\InvalidToken;

    include 'Partials/includes/dbconfig.php';
    
    // $reference = $database->getReference('Test')->getValue();
    // echo $reference;
    ?>
    <link rel="stylesheet" href="Partials/Css/index.css">
  </head>
  <body>
  <form action="index.php" method="post">
  <div class="imgcontainer">
    <img src="Partials/images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">

    <label for="email" ><b>E-mail</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="loginBtn">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a type="button" class="registerBtn" href="Partials/Pages/Register.php">Register</a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
  </body>
  <?php

  $auth = $firebase->createAuth();

  if(isset($_POST['loginBtn'])){
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    try{
      $signInResult = $auth->signInWithEmailAndPassword($email, $password);
      $token = $signInResult->idToken();
      echo "Clicked";

      try{
        $verIdToken = $auth->verifyIdToken($token);
        // disregards
        $uid = $verIdToken->claims()->get('sub');

        $_SESSION['uid']=$uid;
        $_SESSION['token']=$token;

        header('Location: Partials/Pages/Dashboard.php');
        echo "SUCCESS";
        exit();

      }catch(InvalidToken $e){
        echo '<script>alert("The token is invalid!")</script>';
      }catch(\InvalidArgumentException $e){
        echo '<script>alert("The token could not be parsed!")</script>';
      }
    }catch(Exception $e){
      echo '<script>alert("Invalid Email and/or Password!")</script>';
    }
  }


  ?>
</html>