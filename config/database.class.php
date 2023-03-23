<?php
require_once '/config/config.inc.php';

class Database
{
  //properties
  public $database = DBNAME;
  public $host = DBHOST;
  public $user = DBUSER;
  public $pass = DBPASS;
  public $con;
  // CONSTRUCTION FUNCTION THAT always runs at start of class
  public function __construct()
  {
    $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->database); #db connection

    //CHECK CONNECTION
    if (mysqli_connect_errno()) {
      //FAILED 
      echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
    } else {
      //PASSED
      echo 'Successfully connect to MySQL';
    }
  }
  //getter func›tion that returns data from the database
  public function executeSelectQuery($con, $sql)
  {
    return mysqli_query($con, $sql);
  }
  //setter function that inserts, updates, deletes data from the database
  public function executeQuery($con, $sql)
  {
    return mysqli_query($con, $sql);
  }
}
?>