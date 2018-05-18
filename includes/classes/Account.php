<?php

  class Account  {

    private $con;
    private $errorArray;

    public function __construct($con) {
      $this->con = $con;
      $this->errorArray = array();
      }


    public function register($username, $firstName, $lastName, $email, $confirmEmail, $password, $confirmPassword) {
      // validate all the input
      $this->validateUsername($username);
      $this->validateFirstname($firstName);
      $this->validateLastname($lastName);
      $this->validateEmails($email, $confirmEmail);
      $this->validatePasswords($password, $confirmPassword);

      if (empty($this->errorArray)) {
        return $this->insertUserDetails($username, $firstName, $lastName, $email, $password);
        // insert the data into our database
      }else {
        return false;
        }
      }

      // function to check authenticity of log in requests
      public function login ($loginUsername, $password){
        $password = md5($password);
        $results = mysqli_query($this->con, "SELECT * FROM users WHERE username = '$loginUsername' AND password = '$password' ");


        if (mysqli_num_rows($results) == 1) {
          return true;
        }else {
          array_push($this->errorArray, Constants::$loginFailed);
          return false;

        }

      }

      // function to output the error message
    public function getError($error) {
      if (!in_array($error, $this->errorArray)) {
        $error = "";
      }return "<span class='errorMessage'>$error</span>";
    }

    // insert user details into the database after all vetting is done
    private function insertUserDetails($username, $firstName, $lastName, $email, $password) {
      $encryptedPassword = md5($password);
      $profilePic = "assets/images/profile-pics/generic-pic.png";
      $date = date("Y-m-d h:i:s");

      $result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$username', '$firstName', '$lastName', '$email', '$encryptedPassword', '$date', '$profilePic')");
      return $result;
    }

      // username authentication
      private function validateUsername ($username) {
        if (strlen($username) > 25 || strlen($username) < 5) {
          array_push($this->errorArray, Constants::$usernameCharacter);
          return;
        }
        // check if username already exists
      }
      // firstname authentication
      private function  validateFirstname($firstName) {
        if (strlen($firstName) > 25 || strlen($firstName) < 2) {
          array_push($this->errorArray, Constants::$fistnameCharacter);
          return;
        }
      }
      // lastname authentication
      private function validateLastname ($lastName) {
        if (strlen($lastName) > 25 || strlen($lastName) < 2) {
          array_push($this->errorArray, Constants::$lastnameCharacter);
          return;
        }
      }

      // emails authentication
      private function validateEmails ($email, $confirmEmail) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          array_push($this->errorArray, Constants::$emailInvalid);
          return;
        }
        if ($email != $confirmEmail) {
          array_push($this->errorArray, Constants::$emailDoNotMatch);
          return;
        }
        //check if the email already exists
      }

      // passwords authentication
      private function validatePasswords ($password, $confirmPassword) {
        if ($password != $confirmPassword) {
          array_push($this->errorArray, Constants::$passwordDonNotMatch);
          return;
        }
        if (preg_match('/[^A-Za-z0-9]/', $password)) {
          array_push($this->errorArray, Constants::$passwordInvalid);
          return;
        }
        if (strlen($password) > 30 || strlen($password) < 5) {
          array_push($this->errorArray, Constants::$passwordCharacter);
          return;
        }
      }

    }
 ?>
