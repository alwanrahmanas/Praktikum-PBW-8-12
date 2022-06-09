<?php

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form action="dbconnLogin.php" method="post">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="Email" autocomplete="nope" name="email" id="email">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password" name="pwd" id="pwd">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
      
      <br>
      <a href="Form%20Pendaftaran.html" class="link">Register</a>
    </div>
    <div class="action">
      <button>Sign in</button>
    </div>
  </form>
</div>
<!-- partial -->
  

</body>
</html>
