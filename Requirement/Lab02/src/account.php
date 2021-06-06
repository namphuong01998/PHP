<?php
class Account {
  private $email;
  private $password;

  //Constructor
  function __construct($email, $password) {
    $this->email = $email;
    $this->password = $password;
  }

  //Function
  function get_email() {
    return $this->email;
  }
  function get_password() {
    return $this->password;
  }
}

?>