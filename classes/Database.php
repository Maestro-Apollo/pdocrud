<?php

/**
 *
 */
class Database
{
  private $hostname = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "pdo";
  private $pdo;

  public function __construct()
  {
    if(isset($this->pdo)){
      try {
        $link = new PDO("mysql:host=".$this->hostname.";dbname=".$this->dbname,$this->username,$this->password);
        $link -> setAttritube(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $link -> exec("SET CHARACTER SET utf8");
        $this->pdo = $link;

      } catch (PDOException $e) {
        die("Failed to connect with Database".$e->getMessage());
      }

    }
  }
}


 ?>
