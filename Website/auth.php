<?php

include 'C:/xampp/htdocs/WWW/conn_db.php';
$database="useraccounts";
$mysqli=new mysqli($host,$user,$password,$database);
if (mysqli_connect_errno())
{
 echo mysqli_connect_error();	
}

$q="SELECT * from user";
$r=$mysqli->query($q);

while ($row=$r->fetch_array()) {
	

require_once('session.php');
 if (isset($_SESSION['email']) && $_SESSION['email']!='' && isset($_SESSION['firstname']) && $_SESSION['firstname']!='')
 {
  //do nothing
 }
 else
 {
  header("location:Login.php");
  exit();
 }

}
?>