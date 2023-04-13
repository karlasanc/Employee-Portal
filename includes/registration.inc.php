<?php

//check for incoming data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // sanitize variables for SQL injection
  $firstName = htmlspecialchars($_POST['firstName'], ENT_QUOTES, 'UTF-8');
  $lastName = htmlspecialchars($_POST['lastName'], ENT_QUOTES, 'UTF-8');
  $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
  $password2 = htmlspecialchars($_POST['password2'], ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
  $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
  $address = htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8');
  $salary = htmlspecialchars($_POST['salary'], ENT_QUOTES, 'UTF-8');
  $SSN = htmlspecialchars($_POST['SSN'], ENT_QUOTES, 'UTF-8');

  //loading registration applicaiton classes
  include_once "../classes/dbh.class.php";
  include_once "../classes/registration.class.php";
  include_once "../classes/registrationctrl.class.php";

  //instantiate Registration Controller Class
  $register = new RegistrationCtrl($firstName, $lastName, $password, $password2, $email, $phone, $address, $salary, $SSN);

  //validate data and query into database
  $register->registerUser();

  // reroute user to login page
  header("location: ../login.php?error=loginsuccess");
  exit();
}
//returns user to registration page
else {
  header("location: ../registration.php?error=registererror");
}
