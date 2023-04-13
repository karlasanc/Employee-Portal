<?php
// db class that connects to db
class Dbh
{

  // Database Handler Class using PDO to connect to Database
  protected function connect()
  {
    try {
      //database info to match as needed
      $dbuser = 'root';
      $dbpass = '';
      $dbname = 'EmployeePortal';
      $dbhost = 'localhost';

      //database conneciton string
      $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $dbuser, $dbpass);

      //returns db connection
      return $dbh;
    }

    // if there is an error, it gets assinged to variable $e and sends error
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
      header("location: ../index.php?error=systemerror");
      exit();
    }
  }
}
