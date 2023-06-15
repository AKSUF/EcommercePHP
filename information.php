<?php
session_start();
echo "Welcome".$_SESSION['username'];
echo "<br>";
echo "And your password".$_SESSION['password'];
?>