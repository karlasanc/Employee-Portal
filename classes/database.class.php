<?php
// db class that connects to db
class Database
{

  // Database Handler Class using PDO to connect to Database
  protected function connect()
  {
    try {
      $dbuser = 'root';
      $dbpass = '';
      $dbh = new PDO('mysql:host=localhost;dbname=empDB', $dbuser, $dbpass);

      //returns db connection
      return $dbh;
    }

    // if there is an error, it gets assinged to variable $e and sends error
    catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      //kills conneciton
      die();
    }
  }
}
