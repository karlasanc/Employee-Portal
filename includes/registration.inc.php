<?php error_reporting(E_ALL);

// if user submitted form via form button
if (isset($_POST["registration"])) {

  // SQL Injection Validation
  $validatedFirstName = htmlspecialchars($_POST['firstName']);
  $validatedLastName = htmlspecialchars($_POST['lastName']);
  $validatedPassword = htmlspecialchars($_POST['password']);
  $validatedPassword2 = htmlspecialchars($_POST['password2']);
  $validatedEmail = htmlspecialchars($_POST['email']);
  $validatedPhone = htmlspecialchars($_POST['phone']);
  $validatedAddress = htmlspecialchars($_POST['address']);
  $validatedSalary = htmlspecialchars($_POST['salary']);
  $validatedSSN = htmlspecialchars($_POST['SSN']);

  //loading classes
  include_once "../classes/database.class.php"; ## ensure thisis first. they load in order.
  include_once "../classes/registration.class.php";
  include_once "../classes/validate.class.php";

  #create a new object of the singup class
  $user = new Validate($validatedFirstName, $validatedLastName, $validatedPassword, $validatedPassword2, $validatedEmail, $validatedPhone, $validatedAddress, $validatedSalary, $validatedSSN);

  //RUNNING ERROR HANDLER AND USER REGISTRATION
  ## run singup method within class
  $user->validateUser();



  //SENDING USER BACK TO THE FORNT PAGE
  header("location: ../registration.php?error=success"); ## confirms to user there was no error signin up
} else {
  // if user did not submitted form via form button
  header("location: ../registration.php?error=forminput");
}
