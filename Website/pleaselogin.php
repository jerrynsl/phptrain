<?php

include ("ticketmenu.php");

if (isset($_POST['login'])) {
	header("Location: Login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<link rel="stylesheet" a href="css/styleA.css">
</head>
<body background="img/bgtrain.gif">
<div class="mainpage-login-required">
<h1 class="p1">Please log in<br>
	to your account<br>
	before you can<br>
	book your ticket.
</h1>
</div>
<div class="foot">
		<footer>
		  <div id="pfoot">Copyright Testing &#169;</div>
		</footer>
	</div>
</body>
</html>