<?php

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

  $wasSuccesfull = $account->register($username, $firstName, $lastName, $email, $confirmEmail, $password, $confirmPassword);

  if ($wasSuccesfull == true) {
    header("Location: index.php");
  }

}

?>
