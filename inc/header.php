<?php
//includes database connection
#require_once '/config/config.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Portal Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="grid gap-3 row-gap-3">
  <!--Website Header-->
  <header class="container-fluid bg-dark text-center text-white p-2 g-col-6">
    
  <!--Website Navigation-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        
        <!--Websote Logo-->
        <a class="navbar-brand" href="/index.php">
          <img src="/img/logo.jpeg" alt="Nav Logo" style="width:40px;" class="rounded-pill">
        </a>

        <!--Website Name-->
        <p class="text-center">
          <h1>Employee Portal Website</h1>
        </p>
        
        <!--Collapsable Navigation Button-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#websitenavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!--Navigation Links-->
        <div class="collapse navbar-collapse" id="websitenavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/contactus.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/login.php">Login</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="../pages/registration.php">Registration</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>