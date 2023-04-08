<?php
// class creation
class Validate extends Registration #database connection
{
  // initiate class properites
  private $firstName;
  private $lastName;
  private $password;
  private $password2;
  private $email;
  private $phone;
  private $address;
  private $salary;
  private $SSN;


  // constructor method : define/prepare properties
  public function __construct($firstName, $lastName, $password, $password2, $email, $phone, $address, $salary, $SSN)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->password = $password;
    $this->password2 = $password2;
    $this->email = $email;
    $this->address = $address;
    $this->salary = $salary;
    // striped nonnumberic data from variables
    $this->phone = preg_replace("/[^0-9]/", "", $phone);
    $this->SSN = preg_replace("/[^0-9]/", "", $SSN);
  }


  // future error handler() when in production
  public function validateUser()
  {
    // if emptyInput is true
    if ($this->emptyInput() !== false) {
      // 1+ fields empty
      header("location: ../registration.php?error=emptyinput");
      exit();
    }
    // if invalidSSN is true
    else if ($this->invalidSSN() !== false) {
      // Invalid SSN
      header("location: ../registration.php?error=ssn");
      exit();
    }
    //if invalidPhone is true
    else if ($this->invalidPhone() !== false) {
      header("location: ../registration.php?error=phone");
      exit();
    }
    //if invalidPassword is true
    else if ($this->invalidPassword() !== false) {
      header("location: ../registration.php?error=invalidpassword");
      exit();
    }
    // if invalidEmail is true
    else if ($this->invalidEmail() !== false) {
      // invalid email 
      header("location: ../registration.php?error=invalidemail");
      exit();
    }
    // if passwordMatch is not true
    else if ($this->passwordMatch() !== true) {
      // passwords entered do not match
      header("location: ../registration.php?error=passwordmatch");
      exit();
    }
    // if userExists() is true 
    else if ($this->userExists() !== false) {
      // user already in database
      header("location: ../registration.php?error=userexists");
      exit();
    }
    // if nothing failed query database
    else {
      $this->registerUser($this->email, $this->password, $this->firstName, $this->lastName, $this->address, $this->phone, $this->salary, $this->SSN);

      header("location: ../registration.php?error=success");
      exit();
    }
  }

  // ERROR HANDLER METHODS
  private function emptyInput() #check for empty fields in form
  {
    $return = null;
    if (empty($this->firstName) || empty($this->lastName) || empty($this->password) || empty($this->password2) || empty($this->email) || empty($this->phone) || empty($this->address) || empty($this->salary) || empty($this->SSN)) {
      $result = true; #1+ field is empty
    } else {
      $result = false; #no fields empty
    }
    return $result;
  }

  // method validates SSN# lenght
  private function invalidSSN()
  {
    $result = null;
    // php built in method
    if (strlen($this->SSN) !== 9) {
      $result = true;
    } else {
      $result = true;
    }
    return $result;
  }
  // method validates PHONE# lenght
  private function invalidPhone()
  {
    $result = null;
    // php built in method
    if (strlen($this->phone) !== 10) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  // password check
  private function invalidPassword()
  {
    $result = null;
    // regular expression pattern
    if (!preg_match("/^[a-zA-Z0-9]{10}$/", $this->password)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  // email check 
  private function invalidEmail()
  {
    $result = null;
    // filter php function/php filter compare
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  // compares two functions with each other
  private function passwordMatch()
  {
    $result = null;
    if ($this->password !== $this->password2) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

  // compares two functions with each other
  protected function userExists()
  {
    $result = null;

    if ($this->checkUser($this->email, $this->SSN)) {
      $result != false;
    } else {
      $result = true;
    }
    return $result;
  }
}
