<?php

include 'Database.php';
class User
{
  private $objDB;
  function __construct()
  {
    $this->objDB = new Database;
  }

  public function userRegistration($data)
  {
    $name = $data['username'];
    $pass = md5($data['password']);
    $email = $data['email'];
    $phone = $data['phone'];

    if($name == "" OR $pass == "" OR $email == "" OR $phone == ""){
      $msg = "<div class="alert alert-danger"> <strong>Error!</strong> Fields can't be empty </div>";
      return $msg;
    }

  }
}



 ?>
