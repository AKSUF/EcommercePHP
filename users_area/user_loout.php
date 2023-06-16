<?php
session_start();

// Unset the session variables
unset($_SESSION['username']);

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header("Location: user_login.php");
exit();
?>
