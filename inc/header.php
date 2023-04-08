<!DOCTYPE html>
<html lang="en">

<head>
	<title>Employee Portal Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="#">
</head>

<body>
	<style>
		header nav {
			background-color: purple;
		}
	</style>
	<!--Website Header-->
	<header class="fixed-top">
		<nav class="navbar navbar-expand-md mb-5">
			<div class="container-fluid">
				<a class="navbar-brand" href="/Employee-Portal/index.php">EmployeePortal</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
					aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav me-auto mb-2 mb-md-0">
						<li class="nav-item">
							<a class="nav-link" href="/Employee-Portal/index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/Employee-Portal/inc/register.php">Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/Employee-Portal/inc/login.php">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/Employee-Portal/inc/contactus.php">Contact Us</a>
						</li>
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-white" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
	</header>