<?php
//start session
session_start();
//unset session
session_unset();
//destroy session
session_destroy();
// reroute user to home page
header("location: ../index.php?error=logoutsuccessfull");
