<?php

  class Account  {

    private $errorArray;

    public function __construct() {
      $this->$errorArray = array();
      }

    public function register($username, $firstName, $lastName, $email, $confirmEmail, $password, $confirmPassword) {
      // validate all the input
      $this->validateUsername($username);
      $this->validateFirstname($firstName);
      $this->validateLastname($lastName);
      $this->validateEmails($email, $confirmEmail);
      $this->validatePasswords($password, $confirmPassword);
      }

      // username authentication
      private function validateUsername ($username) {
        if (srtlen($username) > 25 || strlen($username) < 5) {
          array_push($this->$errorArray, "Your username must be between 5 and 25 characters");
          return;
        }
        // check if username already exists
      }
      // firstname authentication
      private function  validateFirstname($firstName) {
        if (strlen($firstName) > 25 || strlen($firstName) < 2) {
          array_push($this->errorArray, "Your First name must be between 2 and 25 characters");
          return;
        }
      }
      // lastname authentication
      private function validateLastname ($lastName) {
        if (strlen($lastName) > 25 || strlen($lastName) < 2) {
          array_push($this->errorArray, "Your last name must be betwwen 2 and 25 characters");
          return;
        }

      }
      // emails authentication
      private function validateEmails ($email, $confirmEmail) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          array_push($this->errorArray, "Email is invalid");
          return;
        }
        if ($email != $confirmEmail) {
          array_push($this->errorArray, "Your Emails do not match")
        }
        //check if the email already exists
      }

      // emaipasswords authentication
      private function validatePasswords ($password, $confirmPassword) {

      }

  }


 ?>
