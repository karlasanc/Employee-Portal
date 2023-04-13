<?php

//check data received via form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // SANITIZE VARIABLES FOR SQL INJECTION
  $sanitizeFirstName = htmlspecialchars($_POST['firstName'], ENT_QUOTES, 'UTF-8');
  $sanitizeLastName = htmlspecialchars($_POST['lastName'], ENT_QUOTES, 'UTF-8');
  $sanitizePassword = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
  $sanitizePassword2 = htmlspecialchars($_POST['password2'], ENT_QUOTES, 'UTF-8');
  $sanitizeEmail = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
  $sanitizePhone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
  $sanitizeAddress = htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8');
  $sanitizeSalary = htmlspecialchars($_POST['salary'], ENT_QUOTES, 'UTF-8');
  $sanitizeSSN = htmlspecialchars($_POST['SSN'], ENT_QUOTES, 'UTF-8');

  //loading classes
  include_once "../classes/dbh.class.php"; ## ensure thisis first. they load in order.
  include_once "../classes/registration.class.php";
  include_once "../classes/registrationctrl.class.php";

  //instantiate Registration Controller Class
  $register = new RegistrationCtrl($sanitizeFirstName, $sanitizeLastName, $sanitizePassword, $sanitizePassword2, $sanitizeEmail, $sanitizePhone, $sanitizeAddress, $sanitizeSalary, $sanitizeSSN);
  //calls on validate & register function
  $register->registerUser();

  // reroute user to login page w/ error
  header("location: ../login.php?error=loginsuccess");
  exit();
}
//returns user w/ error back to register page
else {

  header("location: ../registration.php?error=registererror");
}
