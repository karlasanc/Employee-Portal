<?php require_once 'header.php'; ?>

<!--Login Page Content-->
<main main class="container-lg list-group-horizontal-md text-center">

	<!--Displays User Input Error if Found-->
	<span class="text-danger container-lg list-group-item text-center">
		<?php
		//check GET array for any value=pairs passed through URL
		if (isset($_GET["error"])) {

			// empty fields
			if ($_GET["error"] == 'emptyinput') {
				echo "Missing Field";
			}
			// credentials not found
			elseif ($_GET["error"] == 'usernotfound') {
				echo "User Not Found";
			}
			// incorrect password
			elseif ($_GET["error"] == 'wrongpassword') {
				echo "Wrong Password";
			}
			// error from profile
			elseif ($_GET["error"] == 'profileerror') {
				echo "Something went wrong, please log in again";
			}
			else if ($_GET["error"] == 'loginsuccess') {
        echo "<hr class='m-0 border border-alert'><span class='text-success' style='font-size: 30px;'>Thank you for registering a user! Please login.</span> <hr class='m-0 border border-alert'>";
      }
		}
		?>
	</span>

	<!--Login Form Section-->
	<section class="container-sm">
		<form class="list-group-item m-4 p-5 pt-0 mb-0" method="post" action="includes/login.inc.php">
			<div class="card border border-warning">
				<header class="card-header display-4 fw-bold col-sm form-floating">
					<h2>Login Form</h2>
				</header>

				<div class="card-body mx-auto">
					<p class="card-title fw-bold col-sm form-floating">
						Please Login Here</p>

					<!--Email Field-->
					<p class="card-text col-sm form-floating">
						<input id="email" class="form-control form-control-sm" type="email" name="email" placeholder="name@example.com" required>
						<label for="email" class="form-label list-group-item">Email: </label>
					</p>

					<!--Password Required-->
					<p class="card-text col-sm form-floating">
						<input id="password" class="form-control form-control-sm" type="passworde" name="password" placeholder="Password" required>
						<label for="password" class="form-label list-group-item">Password: </label>
					</p>

					<!-- Login Button -->
					<div class="d-grid d-xxl-block list-group-item">
						<input class="btn btn-outline-dark" type="submit" name="login" value="Submit">
					</div>

				</div>

				<!--Register now link -->
				<footer class="card-footer list-group-itemmb-3">
					Don't have an account yet? <a href="registration.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"="registration.php">Register Here</a>
				</footer>

			</div>

		</form>

	</section>

</main>

<?php require_once 'footer.php'; ?>