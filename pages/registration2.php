<?php
require_once '../inc/header.php';

if (isset($_GET['name'])) {
	print_r($_GET); #prints array
	$name = htmlentities($_GET['name']);
	echo $name; #prints variable 


	// string checks
	$name = 'Karla';
	$returnsportionof_name = substr($name, 1, 3); #returns value startnig with 1num and ending with 2nd number

	$trimmed_name = trim($name); #removes extra spaces
	$uppercase_name = strtoupper($name); #uppercases all characters
	$lowercase_name = strtolower($name); #lowercase all characters
	$lowercase_name = strtolower($name); #lowercase all characters
	$uppercasefirstletter_name = ucwords($name); #uppercases first letter word
	$isastring_name = is_string($name); #checks to see if its a string

	$text = 'Hello World';
	$output = str_replace('World', 'Everyone', $text); #1: word to serach, #2: what to replace it, #3: string to search output
}
?>

<!--Registration Page Header-->
<header class="row text-center border-bottom p-2 g-col-6">
	<h2>Registration Page</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus, ullamcorper magna vitae, venenatis leo.
	</p>
</header>

<!--Registration Page Content-->
<main class="text-center p-2 g-col-6">
	<form method="GET" action="registration.php">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label><br>
			<input type="text" name="email">
		</div>
		<input type="submit" value="Submit">
	</form>

	<ul>
		<li>
			<a href="registration.php?name=Brad">Brad</a>
		</li>
		<li>
			<a href="registration.php?name=Steve">Steve</a>
		</li>
	</ul>

	<h1>
		<?php echo "{$name}'s Profile"; ?>
	</h1>




</main>

<!--Registration Page Footer-->
<footer class="text-center border-top p-2 g-col-6">
	Page Footer
</footer>



<?php require_once '../inc/footer.php'; ?>







class Person
{
private $name;
private $email;
public static $ageLimit = 40;

public function __construct($name, $email)
{
$this->name = $name;
$this->email = $email;
echo __CLASS__ . ' created <br>';
}

public function __destruct()
{
echo __CLASS__ . ' destroyed <br>';
}
public function setName($name)
{
$this->name = $name;
}
public function getName()
{
return $this->name;
}
public function setEmail()
{
$this->email = $email;
}
public function getEmail($email)
{
return $this->email;
}
}

#$person1 = new Person('John Doe', 'jd@test.com'); #instantiates class
#echo $person1->getName(); #reaches in to get name form class

class Customer extends Person
{
private $balance;

public function __construct($name, $email, $balance)
{
parent::__construct($name, $email, $balance);
$this->balance = $balance;
echo 'A new ' . __CLASS__ . ' has been created';
}

public function getBalance()
{
return $this->balance;
}

}

$customer1 = new Customer('John Doe', 'johndoe@email.com', 300);
echo $customer1->getBalance();
?>