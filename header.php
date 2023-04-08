<?php
// initiate error logging at startup
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Employee Portal Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Bootstrap Source-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--Bootstrap Icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="#">
</head>


<body>
  <!--Website Header-->
  <header>
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark p-3">

      <!--Website Logo Logo-->
      <a class="navbar-brand" href="index.php"><img src="img/logo.jpeg" alt="Nav Logo" style="width:45px;" class="rounded"></a>

      <!--Website Name-->
      <h1 class="text-center text-white">Employee Portal Website</h1>

      <!--Collapsable Navigation Button-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader" aria-controls="mainHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--Navigation Links-->

      <div class="collapse navbar-collapse" id="mainHeader">
        <ul class="navbar-nav me-auto mb-md-0">
          <li class="nav-item">
            <a class="nav-link bi bi-house" href="index.php"> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bi bi-pencil-square" href="registration.php"> Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bi bi-box-arrow-in-left" href="login.php"> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bi bi-person-lines-fill" href="contactus.php"> Contact Us</a>
          </li>
        </ul>
      </div>

    </nav>
  </header>