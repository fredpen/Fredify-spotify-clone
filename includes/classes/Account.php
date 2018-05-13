<?php
  /**
   *
   */
  class Account  {

  public function __construct() {

    }

  public function register() {
    // validate all the input
    $this->validateUsername($_POST['$username']);
    $this->validateFirstname($_POST['$firstName']);
    $this->validateLastname($_POST['$lastName']);
    $this->validateEmails($_POST['$email, $confirmEmail']);
    $this->validatePasswords($_POST['$password, $confirmPassword']);
    }

    // username authentication
    private function validateUsername ($un) {
      echo "babes";
    }
    // firstname authentication
    private function  validateFirstname($fn) {
    echo "baby";
    }
    // lastname authentication
    private function validateLastname ($ls) {

    }
    // emails authentication
    private function validateEmails ($em, $em2) {

    }

    // emaipasswords authentication
    private function validatePasswords ($pw, $pw2) {

    }

  }


 ?>
