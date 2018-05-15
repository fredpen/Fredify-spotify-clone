<?php

  if (isset($_POST['loginButton'])) {
    $loginUsername = $_POST['loginUsername'];
    $password =$_POST['loginPassword'];

    $loginSucces = $account->login($loginUsername, $password);
    if ($loginSucces == true) {
      header("Location: index.php");
    }

  }

 ?>
