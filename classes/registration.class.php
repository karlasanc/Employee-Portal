<?php
// Registration Application DB Queries
class Registration extends Dbh
{
  // insert query
  protected function setUser($email, $password, $firstName, $lastName, $address, $phone, $salary, $SSN)
  {
    // prepared statement with parameters
    $stmt = $this->connect()->prepare("INSERT INTO tblUser (email, password, firstName, lastName, address, phone, salary, SSN) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");


    // error check
    if (!$stmt->execute(array($email, $password, $firstName, $lastName, $address, $phone, $salary, $SSN))) {
      $stmt = null;
      header("location: ..registration.php?error=regsystem"); 
      exit();
    }
    $stmt = null;
  }


  // methods to use to query into the DB
  protected function checkUser($email, $SSN)
  {
    //create new stmt to run a prepared statement for security
    // reference to connect() method in db class to connect to db
    // reference php prepare() function containing dbquery to prepare the stmt to run inside db
    //use '?' as placeholders
    // helsp prevent sql injection, separate data from sql stmt
    $stmt = $this->connect()->prepare("SELECT email FROM tblUser where email = ? OR SSN = ?;");
    // chekc if prepared statement will fail or success when trying to run it. 
    //use php execute() function to execute. insert data that replaces quesiton marks. Since there are mulitopel items, they need to be entered as an array.
    if (!$stmt->execute(array($email, $SSN))) { ##if any errors
      $stmt = null; #close out / delete statmente
      header("location: ..registration.php?error=regsystem"); ##send user back to the index page
      exit(); ## exits script

    }

    // if there were any rows by using rowcount() to check how many rows it returned, if less than zero, than return false stmt.
    if ($stmt->rowCount() > 0) {
      $resultCheck = false;
    } else {
      $resultCheck = true;
    }
    return $resultCheck;
  }

  // retrives user id from database suing profiel id . ehcks to see if user already has a profile.
  protected function getUserId($email)
  {
    //create a prepare stmt to interact with db
    //use connect() frm DBH Class to connect ot db
    $stmt = $this->connect()->prepare('SELECT userID FROM tblUser WHERE email = ?;');

    //check if connection failed and run at same time
    if (!$stmt->execute(array($email))) {
      $stmt = null;
      header('location: index.php?error=regsystem');
      exit();
    }

    //check if we received any data
    if ($stmt->rowCount() === 0) {
      //no data found
      $stmt = null;
      header('location: index.php?error=useridnotfound');
      exit();
    }

    //save data in assoc array for usage
    $userID = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $userID;
  }
}
