<?php

  if (isset($_POST['loginButton'])) {

  }

  // sanitise unername and emails
  function sanitizeFormInput ($inputText)  {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
  }
  // sanitise string inputs
  function sanitiseStrings ($inputString) {
    $inputString = strip_tags($inputString);
    $inputString = str_replace(" ", "", $inputString);
    $inputString = ucfirst(strtolower($inputString));
    return $inputString;
  }
  // sanitise passwords
  function sanitisepassword ($password) {
    $password = strip_tags($password);
    return $password;
  }

  if (isset($_POST['registerButton'])) {
    // sanitise all $input
    // usernames
    $username = sanitizeFormInput($_POST['loginUsername']);
    $username = sanitizeFormInput($_POST['RegisterUsername']);
    // first and last names
    $firstName = sanitiseStrings($_POST['RegisterFirstName']);
    $lastName = sanitiseStrings($_POST['RegisterLastName']);
    // emails
    $email = sanitizeFormInput($_POST['RegisterEmail']);
    $confirmEmail = sanitizeFormInput($_POST['confirmRegisterEmail']);
    // passwords
    $password = sanitisepassword($_POST['password']);
    $confirmPassword = sanitisepassword($_POST['confirmPassword']);
  }





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
