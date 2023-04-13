<?php

class Login extends Dbh
{

  protected function setUser($email, $password)
  {
    // prepare sql stmt w/ no values
    $stmt = $this->connect()->prepare("SELECT * FROM tblUser WHERE email = ?;");

    // execute stmt inside db
    if (!$stmt->execute(array($email))) {
      $stmt = null;
      header("location: ../login.php?error=loginstmtfailed");
      exit();
    }

    // check # of columns
    if ($stmt->rowCount() === 0) {
      // no results = user not exist
      $stmt = null;
      header("location: ../login.php?error=usernotfound");
      exit();
    }

    //assign results to result in assoc
    $results = $stmt->fetchAll();

    // check password
    if (!$password == $results[0]['password']) {
      $stmt = null;
      header("location: ../login.php?error=wrongpassword");
      exit();
    }
    // check pass match
    else {
      // check both email and password 
      $stmt = $this->connect()->prepare("SELECT * FROM tblUser WHERE email = ? AND password = ?;");

      // execute stmt inside db
      if (!$stmt->execute(array($email, $password))) {
        $stmt = null;
        header("location: ../index.php?error=login2stmtfailed");
        exit();
      }

      // check for # of results form query
      if ($stmt->rowCount() === 0) {
        $stmt = null;
        header("location: ../index.php?error=usernotfound");
        exit();
      }

      // log in user
      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);


      // create a new session to assign varaibles
      session_start();
      $_SESSION["userID"] = $user[0]['userID'];
      $_SESSION["email"] = $user[0]['email'];
      $_SESSION["password"] = $user[0]['password'];
      $_SESSION["firstName"] = $user[0]['firstName'];
      $_SESSION["lastName"] = $user[0]['lastName'];
      $_SESSION["address"] = $user[0]['address'];
      $_SESSION["salary"] = $user[0]['salary'];
      $_SESSION["phone"] = $user[0]['phone'];
      $_SESSION["SSN"] = $user[0]['SSN'];

      $stmt = null;
    }
    $stmt = null;
  }
}
