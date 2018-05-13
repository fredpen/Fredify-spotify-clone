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
        <input type="password" name="loginPassword" placeholder="password" required>
      </p>
      <button type="submit" name="button">Log in</button>
    </form>

    <form id="inputContainer" action="register.php" method="post">
      <h2>Create your free account</h2>
      <p>
        <label for="loginUsername">Username</label>
        <input type="text" name="loginUsername" placeholder="e.g janedow401" required>
      </p>
      <p>
        <label for="loginFirstName">First name</label>
        <input type="text" name="loginFirstName" placeholder="e.g Jane" required>
      </p>
      <p>
        <label for="loginLastName">Last name</label>
        <input type="text" name="loginLastName" placeholder="e.g Dow" required>
      </p>
      <p>
        <label for="loginEmail">Email</label>
        <input type="email" name="loginEmail" placeholder="e.g janedow@gmail.com" required>
      </p>
      <p>
        <label for="confirmLoginEmail">Confirm email</label>
        <input type="email" name="confirmLoginEmail" placeholder="e.g janedow@gmail.com" required>
      </p>
      <p>
        <label for="loginPassword">Password</label>
        <input type="password" name="loginPassword" placeholder="password" required>
      </p>
      <p>
        <label for="confirmLoginPassword">Password</label>
        <input type="password" name="confirmLoginPassword" placeholder="password" required>
      </p>
      <button type="submit" name="button">Log in</button>
    </form>
  </body>

</html>
