<?php //register form db connection script using extends dbh to connect to db class.

class Registration extends Database
{

  protected function registerUser($email, $password, $firstName, $lastName, $address, $phone, $salary, $SSN)
  {

    //create new stmt to run a prepared statement for security
    // reference to connect() method in db class to connect to db
    // reference php prepare() function containing dbquery to prepare the stmt to run inside db
    //use '?' as placeholders
    // helsp prevent sql injection, separate data from sql stmt
    $stmt = $this->connect()->prepare("INSERT INTO tblUser (email, password, firstName, lastName, address, phone, salary, SSN) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");


    // chekc if prepared statement will fail or success when trying to run it. 
    //use php execute() function to execute. insert data that replaces quesiton marks. Since there are mulitopel items, they need to be entered as an array.
    if (!$stmt->execute(array($email, $password, $firstName, $lastName, $address, $phone, $salary, $SSN))) { ##if any errors
      $stmt = null; #close out / delete statmente
      header("location: ../registration.php?error=insertstmtfailed"); ##send user back to the index page
      exit(); ## exits script
    }
    $stmt = null; #close stmt
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
      header("location: ../registration.php?error=selectstmtfailed"); ##send user back to the index page
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
}
