<?php

//check data received via form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // SANITIZE VARIABLES FOR SQL INJECTION
  $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
  $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');

  //load classes
  include_once "../classes/dbh.class.php";
  include_once "../classes/login.class.php";
  include_once "../classes/loginctrl.class.php";

  //instantiate Login Controller Class
  $login = new LoginCtrl($email, $password);

  //validate and sign up user
  $login->loginUser();


  //send user to main page
  header("location: ../index.php?error=loginsuccess");
}
//returns user w/ error back to login page
else {

  header("location: ../login.php?error=loginerror");
}
