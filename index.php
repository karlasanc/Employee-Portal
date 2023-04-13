<?php require_once 'header.php'; ?>

<!-- Home Page Content Here-->
<main class="container-sm p-5">

  <!--Hero Section-->
  <header class="text-center py-4">
    <h2 class="display-1">Employee Portal Website</h2>
    <hr class="m-0 mb-4">

  </header>



  <section class="card p-1" style="border:none; font-size: 26px;">
    <div class="card-body text-center">

      <!-- Main Menu Welcome Customization -->
      <?php if (!isset($_SESSION['userID'])) : ?>
        <h5 class="card-title">Welcome!</h5>
        <br />
        <p class="card-text">This webiste was designed by Karla Sanchez. It is a basic employee portal web application that can be modified to meet your company needs. Feel free to navigate to the top of the screen where you will find a navigational menu that will direct you to log into the website or register for access.</p>
      <?php elseif (isset($_SESSION['userID'])) : ?>

        <h5 class="card-title">Welcome Back - <?php echo $_SESSION['firstName'] . " " .  $_SESSION['lastName']; ?> ! </h5>
        <br>
        <p class="card-text">To discover your new website functionalities, navigate to the top of the menu to see the new navigational items avaiable in the menu options.</p>
      <?php endif; ?>

    </div>
  </section>



</main>

<?php require_once 'footer.php'; ?>