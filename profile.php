<?php
require_once 'header.php';
?>

<!-- Home Page Content Here-->
<main class="container-md">
  <?php
  if (isset($_SESSION['userID'])) {
  ?>

    <!--Displays User Info on Header-->
    <header class="text-center py-4">
      <h2 class="display-1"><?php echo $_SESSION["firstName"]; ?>'s Profile Page</h2>
      <hr class="m-0 border border-dark">
    </header>


    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">

        <section class="card h-100 border border-dark">
          <div class="card-body">

            <!-- About Section -->
            <h5 class="card-title" style="font-size: 35px;"><b>About</b></h5>
            <p class="card-text">
            <ul class=" list-group list-group-flush">
              <li class="list-group-item">FIRST NAME: <?php echo $_SESSION["firstName"]; ?></li>
              <li class="list-group-item">LAST NAME: <?php echo $_SESSION["lastName"]; ?></li>
              <li class="list-group-item">SSN: <?php echo $_SESSION["SSN"]; ?></li>
            </ul>

            </p>

          </div>

        </section>
      </div>
      <div class="col">

        <section class="card h-100 border border-dark">
          <div class="card-body">

            <!-- Employee Details Section -->
            <h5 class="card-title" style="font-size: 35px;"><b>Employee</b></h5>
            <p class="card-text">
            <ul class=" list-group list-group-flush">
              <li class="list-group-item">USERID: <?php echo $_SESSION["userID"]; ?></li>
              <li class="list-group-item">PASSWORD: <?php echo $_SESSION["password"]; ?></li>
              <li class="list-group-item">SALARY: <?php echo $_SESSION["salary"]; ?></li>
            </ul>
            </p>
          </div>
        </section>

      </div>
      <div class="col">

        <section class="card h-100 border border-dark">
          <div class="card-body">

            <!-- Employee Contact Section -->
            <h5 class="card-title" style="font-size: 35px;"><b>Contact</b></h5>
            <p class="card-text">

            <ul class=" list-group list-group-flush">
              <li class="list-group-item">EMAIL: <?php echo $_SESSION["email"]; ?></li>
              <li class="list-group-item">PHONE: <?php echo $_SESSION["phone"]; ?></li>
              <li class="list-group-item">ADDRESS: <?php echo $_SESSION["address"]; ?></li>
            </ul>

            </p>
          </div>
        </section>


      </div>
    </div>

  <?php } else {
    header("location: ../login.php?error=profileerror");
  } ?>

  <footer class="text-center py-4">
    Logout <a href="includes/logout.inc.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"="logout.inc.php"> Here</a>
  </footer>






</main>

<?php require_once 'footer.php'; ?>