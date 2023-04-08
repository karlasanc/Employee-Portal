<?php
require_once 'header.php';
?>
<!--Registration Page Content-->
<main class="container-lg list-group-horizontal-md">
  <!--Registration Page Header-->
  <header class="container-md list-group-item text-center">
    <h2 class="display-4 fw-bold m-2">Registration Page</h2>
    <p>Please fill out the registration form below for website access.</p>
    <!--Temporary Error Handling-->
    <?php
    // dynamic URL error check
    if (isset($_GET["error"])) {
      //echo "Empty Input!";
      if ($_GET["error"] == "emptyinput") {
        echo "<span class='text-danger'>You are missing one or more fields!</span>";
      }
      //echo "Invalid Phone!";
      else if ($_GET["error"] == 'phone') {
        echo "<span class='text-danger'>Invalid phone number entered!</span>";
      }
      //echo "Invalid Password!";
      else if ($_GET["error"] == 'invalidpassword') {
        echo "<span class='text-danger'>Invalid password entered!</span>";
      }
      //echo "Passwords don't match!";
      else if ($_GET["error"] == 'passwordmatch') {
        echo "<span class='text-danger'>Passwords don't match!</span>";
      }
      //echo "Invalid Email!";
      else if ($_GET["error"] == 'email') {
        echo "<span class='text-danger'>Invalid email entered!</span>";
      }
      //echo "User exists!";
      else if ($_GET["error"] == 'userexists') {
        echo "<span class='text-danger'>User already exists!</span>";
      }
      //echo "INSERT SQL STMT error!";
      else if ($_GET["error"] == 'insertstmtfailed') {
        echo "<span class='text-danger'>Something went wrong! ERROR 101 </span>";
      }
      //echo "SELECT SQL STMT error!";
      else if ($_GET["error"] == 'selectstmtfailed') {
        echo "<span class='text-danger'>Something went wrong! ERROR 102 </span>";
      }
      //echo "Registered successfully!";
      else if ($_GET["error"] == 'success') {
        echo "<span class='text-success'>You have successfully registered for access! </span>";
      }
      //echo "Invalid SSN!";
      if ($_GET['error'] == "ssn") {
        echo "<span class='text-danger'>Invalid SSN!</span>";
      }
    }
    ?>
  </header>

  <section class="container-md">
    <!--Registration Form Section-->
    <form class="list-group-item" method="post" action="includes/registration.inc.php" novalidate>
      <div class="card-group">

        <!-- Left Card -->

        <div class="card">
          <div class="card-body">
            <!--Employee Section-->
            <h5 class="card-title list-group-item">Employee Information</h5>
            <div class="row">
              <!--First Name Required-->
              <p class="card-text col-sm-6">
                <label for="firstName" class="form-label list-group-item">First Name:</label>
                <input id="firstName" class="form-control form-control-sm" type="text" name="firstName" placeholder="John" required>
              </p>

              <!--Last Name Required-->
              <p class="card-text col-sm-6">
                <label for="lastName" class="form-label list-group-item">Last Name: </label>
                <input id="lastName" class="form-control form-control-sm" type="text" name="lastName" placeholder="Doe" required>

              </p>

            </div>

            <div class="row">
              <!--Salary -->
              <p class="card-text col-sm-6">
                <label for="salary" class="form-label list-group-item">Salary: </label>
                <input id="salary" class="form-control form-control-sm" type="text" name="salary" required>
              </p>

              <!--SSN Required-->
              <p class="card-text col-sm-6">
                <label for="SSN" class="form-label list-group-item">SSN: </label>
                <input id="SSN" class="form-control form-control-sm" type="text" name="SSN" required>
              </p>

            </div>

            <!--Create Password Section-->
            <h5 class="card-title list-group-item">Create Password</h5>
            <div class="row">

              <!--Password Required-->
              <p class="card-text col-sm-6">
                <label for="password" class="form-label list-group-item">Password: </label>
                <input id="password" class="form-control form-control-sm" type="text" name="password" required>

              </p>
              <!--Password Confirm Required-->
              <p class="card-text col-sm-6">
                <label for="password2" class="form-label list-group-item">Confirm Password: </label>
                <input id="password2" class="form-control form-control-sm" type="text" name="password2" maxlength="10" required>
              </p>

            </div>
            <div clas="row">
              <!--Password Rules-->
              <p class="card-subtitle col-sm-12 list-group-item text-muted text-center">
                10 characters long<br>
                1 uppercase<br>
                1 number
              </p>
            </div>
          </div>
        </div>



        <!-- Right Card -->
        <div class="card">
          <div class="card-body">
            <!--Contact Information Section-->
            <h5 class="card-title list-group-item">Contact Information</h5>
            <div class="row">
              <!--Phone Required-->
              <p class="card-text col-sm-6">
                <label for="phone" class="form-label list-group-item">Phone: </label>
                <input id="phone" class="form-control form-control-sm" type="tel" name="phone" required>
              </p>
              <!--Email Required-->
              <p class="card-text col-sm-6">
                <label for="email" class="form-label list-group-item">Email: </label>
                <input id="email" class="form-control form-control-sm" type="email" name="email" required>
              </p>
            </div>

            <div class="row">
              <!--Address Required-->
              <p class="card-text col-12">
                <label for="address" class="form-label list-group-item">Address</label>
                <input id="address" class="form-control form-control-sm" type="text" name="address" placeholder="123 Main St" required>
              </p>

              <!--Address2 Required-->
              <p class="card-text col-12">
                <label for="address2" class="form-label list-group-item">Address 2 <span class="text-muted">(Optional)</span></label>
                <input id="address2" class="form-control form-control-sm" type="text" name="address2" placeholder="Apartment or Suite">
              </p>

              <!--City Required-->
              <p class="card-text col-md-5">
                <label for="city" class="form-label list-group-item">City: </label>
                <input id="city" class="form-control form-control-sm" type="text" name="city" placeholder="Dallas">

              </p>

              <!--State Required-->
              <p class="card-text col-md-4">
                <label for="state" class="form-label list-group-item">State: </label>
                <input id="state" class="form-control form-control-sm" type="text" name="state" pattern="[A-Za-z]{2}" placeholder="TX" maxlength="2">

              </p>

              <!--Zip Required-->
              <p class="card-text col-md-3">
                <label for="zip" class="form-label list-group-item">Zip: </label>
                <input id="zip" class="form-control form-control-sm" type="text" name="zip" placeholder="12345" maxlength="5">
              </p>


            </div>

            <!-- Registration Button -->
            <div class="d-grid d-xxl-block list-group-item">
              <input class="btn btn-outline-dark" type="submit" name="registration" value="Submit">
            </div>



          </div>
        </div>

      </div>
    </form>

  </section>
  <hr>


</main>


<?php
require_once 'footer.php';
?>