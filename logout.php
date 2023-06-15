<?php 

session_start();
session_unset();
session_destroy();
echo "Variable destroyed";

?>