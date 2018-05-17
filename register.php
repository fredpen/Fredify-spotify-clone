<?php
  include ("includes/classes/Constants.php");
  include ("includes/classes/Account.php");
  include ("includes/database-config.php");

  $account = new Account($con);

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
    <title>Welcome to Fredify!</title>
    <link rel="stylesheet" href="assets/css/register.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <script src="assets/js/jQuery"></script>
  </head>

  <body>
      <?php
        if (isset($_POST['registerButton'])) {
          echo '<script>
                    $(document).ready(function() {
                    $("#loginForm").hide();
                    $("#registerForm").show();
                  });
                </script>';
        }else {
          echo '<script>
                    $(document).ready(function() {
                    $("#loginForm").show();
                    $("#registerForm").hide();
                });
                </script>';
        };
     ?>
    <div id="background">
      <div id="loginContainer">
        <div id="inputContainer">
           <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p><?php echo $account->getError(Constants::$loginFailed) ?>
              <label for="loginUsername">Username</label>
              <input type="text" name="loginUsername" placeholder="e.g janedow401" required>
            </p>
            <p>
              <label for="loginPassword">Password</label>
              <input type="password" name="loginPassword" placeholder="password" required>
            </p>
            <button type="submit" name="loginButton">Log in</button>
            <div class="hasAccountText">
              <span id="hideSignIn">Don't have an account yet? Signup here</span>
            </div>
          </form>

          <!-- =============================================== -->
          <form id="registerForm" action="register.php" method="POST">
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
            <button type="submit" name="registerButton">Register</button>
            <div class="hasAccountText">
              <span id="hideRegister">Already have an account? Sign in Here</span>
            </div>
          </form>
        </div>

        <div class="logintext">
          <h1>Get great music, right now</h1>
          <h2>Listen to loads of songs for free</h2>
          <ul>
            <li>Discover music you'll fall in love with</li>
            <li>Create your own playlist</li>
            <li>Follow artists to keep up to date</li>
          </ul>
        </div>
      </div>
    </div>
    <script src="assets/js/jQuery"></script>
    <script src="assets/js/register.js"></script>
  </body>

</html>
