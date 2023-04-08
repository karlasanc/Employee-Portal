<?php require_once 'header.php'; ?>

<!--Registration Page Content-->
<main class="pt-5 mt-5" style="border: 10px solid green;">
	<!--Registration Page Header-->
	<header id="registerHead" style="border: 10px solid blue;">
		<h2>Registration Page</h2>
	</header>

	<!--Registration Page Navigation-->
	<nav style="border: 10px solid purple;">
	</nav>

	<!--content aside from the main content-->
	<aside style="border: 10px solid black;">
		<?php
		if (isset($_POST['submit'])) {
			$firstName = $_POST['firstName'];
			echo "User Has submitted the form and entered this name : " . $firstName;
		}
		?>
	</aside>

	<!--Registration Form Section-->
	<section style="border: 10px solid orange;">
		<h3>Registration Form</h3>


		<form id="registerForm" method="post" action="/Employee-Portal/inc/register.php">
			<input id="regFormID" type="hidden" name="id" value="" readonly />

			<!--Required-->
			<label for="regFormFName">First Name:</label><br>
			<input id="regFormFName" type="text" name="firstName" placeholder="John"><br>

			<!--Required-->
			<label for="regFormLName">Last Name:</label><br>
			<input id="regFormLName" type="text" name="lastName" placeholder="Doe"><br>

			<!--Required-->
			<label for="regFormSSN">SSN:</label><br>
			<input id="regFormSSN" type="#" name="ssn" maxlength="11" size="11" placeholder="123-45-6789"
				pattern="[0-9]{3}-[0-9]{2}-[0-9]{4}"><br>
			<small>Include all "-"</small><br>

			<!--Required-->
			<label for="regFormPhone">Phone:</label><br>
			<input id="regFormPhone" type="tel" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
				maxlength="12" size="12"><br>
			<small>Include all "-"</small><br>

			<!--Required-->
			<label for="regFormEmail">Email:</label><br>
			<input id="regFormEmail" type="email" name="email"><br>

			<!--Required-->
			<label for="regFormPassword">Password:</label><br>
			<input id="regFormPassword" type="text" name="password" maxlength="10" size="10"><br>
			<small>Max of 10 characters</small><br>

			<hr>

			<label for="regState">State:</label><br>
			<input id="regState" type="text" name="state" pattern="[A-Za-z]{2}" placeholder="TX" size="2" maxlength="2"><br>

			<label for="regFormZip">Zip Code:</label><br>
			<input id="regFormZip" type="text" name="zip" maxlength="5" size="5"><br>
			<small>Max of 5 characters</small><br>

			<hr>

			<!--Required-->
			<input id="regTermsCheck" type="checkbox" name="regTerms" value="regTerms"><br>
			<label for="regTermsCheck"> I agree to Terms & Conditions</label><br>
			<hr>

			<input id="regRegisterButton" name="regFormSubmit" type="submit" value="Register"><br>

			<input id="regClearFormButton" type="reset" value="Clear Form" /><br>

		</form>



	</section>

	<!--independent self-contained content-->
	<article style="border: 10px solid yellow;">
	</article>

	<!--footer for doc-->
	<footer style="border: 10px solid red;"></footer>
</main>




<?php require_once 'footer.php'; ?>