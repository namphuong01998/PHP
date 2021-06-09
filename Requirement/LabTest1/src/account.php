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
    return trim($this->email," ");
  }

  function get_password(){
    $this->password = str_replace(' ','',$this->password);
    $this->password = str_replace(' ','',$this->password);
    $this->password = str_replace(' ','',$this->password);
    return $this->password;
  }
}

?>