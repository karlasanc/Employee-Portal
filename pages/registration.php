<?php
require_once '../inc/header.php';
require_once '../config/config.inc.php';

class Database
{
  //properties
  public $database = DBNAME;
  public $host = DBHOST;
  public $user = DBUSER;
  public $pass = DBPASS;
  public $con;
  // CONSTRUCTION FUNCTION THAT always runs at start of class
  public function __construct()
  {
    $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->database); #db connection

    //CHECK CONNECTION
    if (mysqli_connect_errno()) {
      //FAILED 
      echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
    } else {
      echo 'Successfully connect to MyQL' . '<br> 
      ;
    }
  }

}

$conn = new Database(); #instantiates db connection

//create query
$query = 'SELECT * FROM 
//get result
$result = mysqli_query($conn, $query);

//fetch data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result
mysqli_free_result($result);

//close connection
mysqli_close($conn);




?>

<!--Registration Page Header-->
<header class="row text-center border-bottom p-2 g-col-6">
	<h2>Registration Page</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus, ullamcorper magna vitae, venenatis leo.
	</p>
</header>

<?php require_once '../inc/footer.php'; ?>

