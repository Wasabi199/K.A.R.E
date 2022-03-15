<!DOCTYPE html>
<html>
  <head>
    <?php
    // use Firebase\Auth\Token\Exception\InvalidToken;

    // include '../KARE/Partials/PHP-Firebase/dbconfig.php';
    
    // $reference = $database->getReference('Test')->getValue();
    // echo $reference;
    ?>
    <link rel="stylesheet" href="Partials/Css/index.css">
  </head>
  <body>
  <form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="Partials/images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
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
</html>