<?php
require_once('session.php');
 if (isset($_SESSION['adminname']) && $_SESSION['adminname']!='')
 {
  //do nothing
 }
 else
 {
  header("location:AdminLogin.php");
  exit();
 }
?>