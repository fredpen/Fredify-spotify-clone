<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>

  <body>

    <form id="inputContainer" action="register.php" method="post">
      <h2>Login to your fred-stream account</h2>
      <p>
        <label for="loginUsername">Username</label>
        <input type="text" name="loginUsername" placeholder="username" required>
      </p>
      <p>
        <label for="loginPassword">Password</label>
        <input type="password" name="loginPassword" required>
      </p>
      <button type="submit" name="button">Log in</button>
    </form>

    
  </body>

</html>
