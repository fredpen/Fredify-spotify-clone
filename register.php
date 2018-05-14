<?php
  include ("includes/classes/Constants.php");
  include ("includes/classes/Account.php");

  $account = new Account();

  include ("includes/handlers/register-handler.php");
  include ("includes/handlers/login-handler.php");

// getting form values
function getInputValue ($name) {
  if (isset($_POST[$name])) {
    echo $_POST[$name];
  }
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

    <!-- =============================================== -->
    <form id="inputContainer" action="register.php" method="POST">
      <h2>Create your free account</h2>
      <p>
        <?php echo $account->getError(Constants::$usernameCharacter) ?>
        <label for="username">Username</label>
        <input type="text" value="<?php getInputValue('username') ?>" name="username" placeholder="e.g janedow401" required>
      </p>
      <p>
        <?php echo $account->getError(Constants::$fistnameCharacter) ?>
        <label for="firstname">First name</label>
        <input type="text" value="<?php getInputValue('firstname') ?>" name="firstname" placeholder="e.g Jane" required>
      </p>
      <p>
        <?php echo $account->getError(Constants::$lastnameCharacter) ?>
        <label for="lastname">Last name</label>
        <input type="text" name="lastname" value="<?php getInputValue('lastname') ?>" placeholder="e.g Dow" required>
      </p>
      <p>
        <?php echo $account->getError(Constants::$emailInvalid);
                echo $account->getError(Constants::$emailDoNotMatch);
          ?>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php getInputValue('email') ?>" placeholder="e.g janedow@gmail.com" required>
      </p>
      <p>
        <label for="confirmEmail">Confirm email</label>
        <input type="email" name="confirmEmail" value="<?php getInputValue('confirmEmail') ?>" placeholder="e.g janedow@gmail.com" required>
      </p>
      <p>
        <?php echo $account->getError(Constants::$passwordInvalid);
                echo $account->getError(Constants::$passwordCharacter);
                echo $account->getError(Constants::$passwordDonNotMatch);
          ?>
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
