<?php #Employee Class - Definitions -

  class tblUser {

    //DEFINE PROPERTIES TO BE INCLUDED IN EACH CLASS OBJECT
    public $id;
    public $email;
    public $password;
    public $firstName;
    public $lastName;
    public $address;
    public $phone;
    public $salary;
    public $SSN;
    public statis $employeeCount = 0; 

    /* static properties share the exact same value. */

    /* public, private and protected keywords for properties define how information is accessible by other files. Public ensures proprety and methods are accessible to everyone that has reference to code. private only accessible from within the class -> cannot modify or access property from outside the class. Protected */

    //constructor function that lets you specify parameters during class instantiation to initalize propreties for class at time of instantiation
    function __construct($id, $email, $password, $firstName, $lastName, $address, $phone, $salary, $SSN) {
      $this->id = $id;
      $this->email = $email;
      $this->password = $password;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->address = $address;
      $this->phone = $phone;
      $this->salary = $salary;
      $this->SSN = $SSN;
      self:: $employeeCount++;
    }

    /* getter function: returns a variable value, does not modify the property. called w/o parameters and returns the property from within the class. */
    public function getID() {
      return $this->id;
    }
    public function getEmail() {
      return $this->email;
    }
    public function getPassword() {
      return $this->password;
    }
    public function getFirstName() {
      return $this->firstName;
    }
    public function getLasttName() {
      return $this->lastName;
    }
    public function getAddress() {
      return $this->address;
    }
    public function getPhone() {
      return $this->phone;
    }
    public function getSalary() {
      return $this->salary;
    }
    public function getSSN() {
      return $this->SSN;
    }
    public function getEmployeeCount() {
      return $employeeCount++
    }


    public function setID($id) {
      $this->id = $id;
    }
    public function setFirstName($firstName) {
      $this->firstName = $firstName;
    }
    public function setLastName($lastName) {
      $this->lastName = $lastName;
    }

    
    public function outputAsTable() {
      $table = "<table>";
      $table .= "<tr> <th colspan='2'>";
      $table .= $this->firstName . " " . $this->lastName;
      $table .= "<tr></tr>";
      $table .= "(" . $this->email;
      $table .= "(" . $this->password . ")</td></tr>";
      $table .= "<tr><td>ID:</td>";
      $table .= "<td>" . $this->id . "</td></tr>";
      $table .= "</table>";
      return $table;
    }
    

    //setter function: modify properties and allow extra logic to be added to prevent properties from being set to strange values.
    public function set


  };
?>

<!<!DOCTYPE html>
<html>
<body>
<h1> Welcome <?php echo $username; ?> </h1>
<p>
  <h2>Tester for Employee Class:</h2>
  <?php
    // include class definition
    include 'employee.class.php';

    $this->id = $id;
    $this->email = $email;
    $this->password = $password;
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->address = $address;
    $this->phone = $phone;
    $this->salary = $salary;
    $this->SSN = $SSN;
    self:: $employeeCount++;

    // create new instance of Employee class - Instantiate -
    $picasso = new Employee('1', 'karla.sanchez@email.com', 'EPassword1', 'Karla', 'Sanchez', '123 main st', '1231231234', 30000, '111223333');

    
    echo $picasso-> outputAsTable();
  ?>
</p>
</body>
</html>





