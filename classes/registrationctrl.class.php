<?php
// class creation
class RegistrationCtrl extends Registration #database connection
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

  /* ERROR VALIDATION METHODS */

  // method to check for empty fields
  private function emptyInput()
  {
    // check to see if ANY empty fields are empty
    if (empty($this->firstName) || empty($this->lastName) || empty($this->password) || empty($this->password2) || empty($this->email) || empty($this->phone) || empty($this->address) || empty($this->salary) || empty($this->SSN)) {
      $result = true;
    }
    // if no empty fields are emtpy
    else {
      $result = false;
    }
    return $result;
  }

  // method validates SSN# lenght
  private function invalidSSN()
  {
    if (strlen($this->SSN) !== 9) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  // method validates PHONE# length
  private function invalidPhone()
  {

    if (strlen($this->phone) > 10) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  // password check validation
  private function invalidPassword()
  {
    // regular expression pattern
    if (!preg_match("/^[a-zA-Z0-9]{10}$/", $this->password)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  // email check validation
  private function invalidEmail()
  {
    // filter php function/php filter compare
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  // check passwords match each other 
  private function passwordMatch()
  {
    if ($this->password !== $this->password2) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

  /* DATABASE CONNECTION METHODS */

  // used by includes files to register/validate user
  public function registerUser()
  {
    // if emptyInput is true
    if ($this->emptyInput() !== false) {
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
    else if ($this->userExists()  == false) {
      // user already in database
      header("location: ../registration.php?error=userexists");
      exit();
    }


    // if nothing failed call database query function 
    else {
      $this->setUser($this->email, $this->password, $this->firstName, $this->lastName, $this->address, $this->phone, $this->salary, $this->SSN);
    }
  }

  // cal on db method to check db if user exists
  protected function userExists()
  {
    if ($this->checkUser($this->email, $this->SSN)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }
}
