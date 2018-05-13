<?php
  include ("includes/classes/Account.php");

  $account = new Account();
  $account->register();

  include ("includes/handlers/register-handler.php");
  include ("includes/handlers/login-handler.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>

  <body>

    <form id="inputContainer" action="register.php" method="POST">
      <h2>Login to your Fredify account</h2>
      <p>
        <label for="loginUsername">Username</label>
        <input type="text" name="loginUsername" placeholder="username" required>
      </p>
      <p>
        <label for="loginPassword">Password</label>
        <input type="password" name="loginPassword" placeholder="password" required>
      </p>
      <button type="submit" name="loginButton">Log in</button>
    </form>

    <form id="inputContainer" action="register.php" method="POST">
      <h2>Create your free account</h2>
      <p>
        <label for="RegisterUsername">Username</label>
        <input type="text" name="RegisterUsername" placeholder="e.g janedow401" required>
      </p>
      <p>
        <label for="RegisterFirstName">First name</label>
        <input type="text" name="RegisterFirstName" placeholder="e.g Jane" required>
      </p>
      <p>
        <label for="RegisterLastName">Last name</label>
        <input type="text" name="RegisterLastName" placeholder="e.g Dow" required>
      </p>
      <p>
        <label for="RegisterEmail">Email</label>
        <input type="email" name="RegisterEmail" placeholder="e.g janedow@gmail.com" required>
      </p>
      <p>
        <label for="confirmRegisterEmail">Confirm email</label>
        <input type="email" name="confirmRegisterEmail" placeholder="e.g janedow@gmail.com" required>
      </p>
      <p>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="password" required>
      </p>
      <p>
        <label for="confirmPassword">Password</label>
        <input type="password" name="confirmPassword" placeholder="password" required>
      </p>
      <button type="submit" name="registerButton">Log in</button>
    </form>
  </body>

</html>
