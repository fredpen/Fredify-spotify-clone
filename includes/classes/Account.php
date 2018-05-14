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
      }
      // lastname authentication
      private function validateLastname ($lastName) {

      }
      // emails authentication
      private function validateEmails ($email, $confirmEmail) {

      }

      // emaipasswords authentication
      private function validatePasswords ($password, $confirmPassword) {

      }

  }


 ?>
