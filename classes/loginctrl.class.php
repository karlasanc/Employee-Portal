<?php
// Login Application Class
class LoginCtrl extends Login #database connection
{
  // initiate class properites
  private $email;
  private $password;


  // constructor method : define/prepare properties
  public function __construct($email, $password)
  {
    $this->email = $email;
    $this->password = $password;
  }


  // future error handler() when in production
  public function loginUser()
  {
    // if emptyInput is true
    if (!$this->emptyInput() == false) {

      header("location: ../login.php?error=emptyinput");
      exit();
    }

    // if nothing failed query database
    else {
      $this->setUser($this->email, $this->password);
    }
  }

  // CHECK FOR INPUTS
  protected function emptyInput() #check for empty fields in form
  {
    if (empty($this->email) || empty($this->password)) {
      $result = true; #1+ field is empty
    } else {
      $result = false; #no fields empty
    }
    return $result;
  }
}
