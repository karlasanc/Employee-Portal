<?php require_once '../inc/header.php'; ?>

<?php
//VALIDATION MESSAGE VARIABLES
$msg = '';
$msgClass = '';

//CHECK IS USER SUBMITTED FORM DATA THROUGH WEB PAGE
if (filter_has_var(INPUT_POST, 'submit')) {
  //GET DATA FROM USER INPUT FORM
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  //CHECK REQUIRED FIELDS
  if (!empty($email) & !empty($name) & !empty($message)) {
    //IF REQUIRED FIELD PASS, THEN CHECK EMAIL
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      //IF EMAIL VALIDATE FAIL THEN ERROR MESSAGE
      $msg = 'Please use a valid email';
      $msgClass = 'alert-danger';
    } else {
      //IF EMAIL VALIDATE PASSSED
      // recipient email
      $toEmail = 'ksanch7@gmail.com';
      $subject = 'Contact Request From ' . $name;
      $body = '<h2>Contact Request</h2><hr>
        <h4>Name</h4><p>' . $name . '</p>
        <h4>Email</h4><p>' . $email . '</p>
        <h4>Message</h4><p>' . $message . '</p>
      ';
      //Email headers
      $headers = "MIME-VERSION 1.0" . "\r\n";
      $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

      //additional headers
      $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

      if (mail($toEmail, $subject, $body, $headers)) {
        //If Email was Send Email
        $msg = 'Your email was sent';
        $msgClass = 'alert-success';
      } else {
        //If Email Failed
        $msg = 'Your email was not sent';
        $msgClass = 'alert-danger';
      }
    }
  } else {
    //REQUIRED FIELD FAIL
    $msg = 'Please fill in all fields';
    $msgClass = 'alert-danger';
  }
}
?>

<!--Contact Page Header-->
<header class="row text-center border-bottom p-2 g-col-6">
  <h2>Contact Us</h2>
</header>

<!--Contact Page Content-->
<main class="row p-2 g-col-6">
  <div class="col">
    <!--Contact Us Form-->
    <div class="container">

      <!--VALIDATION MESSAGE BOX-->
      <?php if ($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
      <?php endif; ?>


      <!--Contact Us Form-->
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control"
            value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
        </div>

        <div class="form-group">
          <label>Message</label>
          <textarea name="message"
            class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>


  </div>

  <div class="col">
    <div class="container text-center">
      <p>
        <b>Need Help With:</b><br>
        Website Assistance<br>
        Content Access<br>
        Security Concerns<br>
      </p>

      <p>
        <b>Reach Out!</b></b><br><br>
        <b>Phone</b> 1-800-867-5309<br>
        <b>Email</b> employee@email.com
      </p>
    </div>
  </div>

</main>

<!--Contact Page Footer-->
<footer class="row text-center border-top p-2 g-col-6">
  <div class="col">
    <h4>Hours of Operation</h4>
    <p>
      Mon-Fri: 8am-7pm<br>
      Sat: 10am-3pm<br>
      Sun: Closed
    </p>
  </div>

  <div class="col">
    <h4>Location</h4>
    <p>
      Corporate Office<br>
      1234 Main St<br>
      Someplace, TX 12345<br>
    </p>
  </div>
</footer>


<?php require_once '../inc/footer.php'; ?>