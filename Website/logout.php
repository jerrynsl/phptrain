<?php
include('auth.php');
$_SESSION=array();  //to unset all the session variables at once
session_destroy();
//print_r($_SESSION);
header("Location: tickethome.php");
?>