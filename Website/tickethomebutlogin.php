<?php
include 'auth.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" a href="css/style.css">
</head>
<body background="img/bgtrain.gif">
	<div class="mainpage">
	<div class="menu">
		<?php include 'ticketmenu2.php'; ?>
	</div>
	
		<h2 class="p2">Greetings, <?php echo $_SESSION['firstname']; ?></h2>

		<h3 class="p3">Welcome to Chino Train<br> 
		Ticket Booking System.<br>
		Get Started by clicking on<br>
		Booking on the top right conner.
		</h3>
	</div>
	<div class="foot">
		<footer>
		  <div id="pfoot">Copyright Testing &#169;</div>
		</footer>
	</div>
</body>
</html>