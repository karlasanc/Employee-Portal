<?php require_once 'header.php'; ?>

<!--Registration Page Content Here-->
<main class="container p-5">

	<!--Registration Header-->
	<header class="mt-2 mb-3 fw-bold text-center">
		<h2 class="display-5">Registration Page</h2>
	</header>

	<div class="row g-4">

		<div class="col-md-7 col-lg-8">

			<!--Registration Form Section-->
			<section class="card">
				<div class="card-body">
					<h4 class="card-title mb-3">Register Here</h4>

					<form id="registerForm" action="#" method="get" target="_self" class="card-text needs-validation" novalidate>
						<button type="button" onclick="alert('Hello World!')">Click Me!</button>
						<!--test form input-->

						<form class="needs-validation" novalidate>

							<div class="row g-3">

								<div class="col-sm-6">
									<label for="id" class="form-label">ID</label>
									<input type="text" class="form-control" id="id" placeholder="Leave Blank" value="">
								</div>

								<div class="col-sm-6">
									<label for="salary" class="form-label">Salary</label>
									<input type="text" class="form-control" id="salary" placeholder="" value="" required>
									<div class="invalid-feedback">
										Valid salary amount is required.
									</div>
								</div>

								<div class="col-sm-6">
									<label for="firstName" class="form-label">First Name</label>
									<input type="text" class="form-control" id="firstName" placeholder="" value="" required>
									<div class="invalid-feedback">
										Valid first name is required.
									</div>
								</div>

								<div class="col-sm-6">
									<label for="lastName" class="form-label">Last Name</label>
									<input type="text" class="form-control" id="lastName" placeholder="" value="" required>
									<div class="invalid-feedback">
										Valid last name is required.
									</div>
								</div>

								<div class="col-sm-6">
									<label for="ssn" class="form-label">SSN</label>
									<input type="text" class="form-control" id="ssn" placeholder="" value="" required>
									<div class="invalid-feedback">
										Valid SSN is required.
									</div>
								</div>

								<div class="col-sm-6">
									<label for="password" class="form-label">Password</label>
									<input type="text" class="form-control" id="password" placeholder="" value="" required>
									<div class="invalid-feedback">
										Valid password is required.
									</div>
								</div>

								<div class="col-sm-6">
									<label for="phone" class="form-label">Phone</label>
									<input type="tel" class="form-control" id="phone" placeholder="" value="" required>
									<div class="invalid-feedback">
										Valid phone number is required.
									</div>
								</div>

								<div class="col-sm-6">
									<label for="email" class="form-label">Email</label>
									<input type="email" class="form-control" id="email" placeholder="you@example.com" required>
									<div class="invalid-feedback">
										Please enter a valid email address.
									</div>
								</div>

								<div class="col-12">
									<label for="address" class="form-label">Address</label>
									<input type="text" class="form-control" id="address" placeholder="1St" required>
									<div class="invalid-feedback">
										Please enter your address.
									</div>
								</div>

								<div class="col-12">
									<label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
									<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
								</div>

								<div class="col-md-5">
									<label for="country" class="form-label">Country</label>
									<select class="form-select" id="country" required>
										<option value="">Choose...</option>
										<option>United States</option>
									</select>
									<div class="invalid-feedback">
										Please select a valid country.
									</div>
								</div>

								<div class="col-md-4">
									<label for="state" class="form-label">State</label>
									<select class="form-select" id="state" required>
										<option value="">Choose...</option>
										<option>Texas</option>
									</select>
									<div class="invalid-feedback">
										Please provide a valid state.
									</div>
								</div>

								<div class="col-md-3">
									<label for="zip" class="form-label">Zip</label>
									<input type="text" class="form-control" id="zip" placeholder="" required>
									<div class="invalid-feedback">
										Zip code required.
									</div>
								</div>

							</div>

							<hr class="my-4">

							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="checkTerms" required>
								<label class="form-check-label" for="checkTerms">I have read and agree to the <a href="#"><u>Terms &
											Conditions</u></a></label>
							</div>

							<hr class="my-4">

							<button class="w-100 btn btn-secondary btn-lg" type="submit">Register</button>
						</form>
					</form>
				</div>

			</section>
		</div>

		<!--Registration Page Sidebar-->
		<aside class="col-md-5 col-lg-4 order-md-last">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<p class="card-text">Trouble?
						<a href="#">Contact Us</a>
					</p>
				</div>
			</div>

			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<p class="card-text">Already Registered?
						<a href="#">Sign-In</a>
					</p>
				</div>
			</div>
		</aside>
	</div>
</main>

<?php require_once 'footer.php'; ?>