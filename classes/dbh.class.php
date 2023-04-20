<?php
// db class that makes connection to db
class Dbh
{
  // method to connect to db
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

    // send error 
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
      header("location: ../index.php?error=systemerror");
      exit();
    }
  }
}
