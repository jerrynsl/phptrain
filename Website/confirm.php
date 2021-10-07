<?php
include('C:/xampp/htdocs/WWW/conn_db.php');
$database='train';
$mysqli=new mysqli($host,$user,$password,$database);
if (mysqli_connect_errno())
{
 echo mysqli_connect_error();	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
	<link rel="stylesheet" a href="css/styleA.css">
	<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body background="img/bgtrain.gif">
<div class="mainpage">
<div class="menu">
	<?php include "ticketmenu2.php"; ?>
</div>
	<div class="container">
		<img src="img/Chino.png">
		<?php
if (isset($_POST['submit'])) {
	
	$q="SELECT * from location where lid=".$_POST['origin'];
	$r=$mysqli->query($q);


	echo "Name:".$_POST['name']."<br>";
	while ($row=$r->fetch_assoc()) {
		echo "Origin:".$row['location']."<br>";
	
	
	echo "Date:".$_POST['year']."-".$_POST['month']."-".$_POST['day']."<br>";
	echo "Time:".$_POST['time']."<br>";
	echo "The number of ticket: ".$_POST['number']."<br>";

	

	$q2="INSERT into booking values(null,
	  		'".$_POST['name']."',
	  		'".$row['location']."',
	  		'".$_POST['year']."-".$_POST['month']."-".$_POST['day']."',
		  	'".$_POST['time']."',
	  		'".$_POST['number']."')";

	 	$r2=$mysqli->query($q2);
	 	if ($r2) {
	 	echo "Your record has been added, Please head to the counter and tell your name to get your booking ticket.";
	 }
	

}	


}


?>
		<form method="post" action="confirm.php">
			<input type='submit' name='confirm' value='Back to home' class="btn-login">
			<input type='submit' name='back' value='Back' class="btn-login">
		</form>
	</div>
</div>
<div class="foot">
		<footer>
		  <div id="pfoot">Copyright Testing &#169;</div>
		</footer>
	</div>
</body>
</html>

<?php
if (isset($_POST['confirm'])) {
	header("Location: tickethomebutlogin.php");
}



if(isset($_POST['back'])){

	header("Location: booking.php");

}



?>