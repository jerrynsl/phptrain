<?php

include 'adminauth.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<link rel="stylesheet" a href="css/styleA.css">
	<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body background="img/bgtrain.gif">
	<div class="mainpage-admin-booking">
		<div class="menu">
			<?php include 'adminmenu.php'; ?>
		</div>
		<br>
<?php

include 'C:/xampp/htdocs/WWW/conn_db.php';
$database="train";
$mysqli=new mysqli($host,$user,$password,$database);
if (mysqli_connect_errno())
{
 echo mysqli_connect_error();	
}


$q="SELECT * from booking";
$r=$mysqli->query($q);

if ($r -> num_rows > 0) {
			echo '<div class="overflow">';
			echo '<div class="overflow1">';
			echo "<table border='1'>";
			echo "<tr> <th>Name</th> <th>Origin</th> <th>Date</th> <th>Time</th> <th>Number of Ticket</th></tr>";
				
			while ($row=$r -> fetch_assoc()) {
				echo "<tr> <td>".$row["usernname"]."</td> <td>".$row["origin"]."</td> <td>".$row['date']."</td> <td>".$row['time']."</td> <td>".$row["numberoft"]."</td> </tr>";
			}

			echo "</table>";
			echo "</div>";
			echo "</div>";
		}else{

			echo "0 result";

				}
?>
<form method="post" action="adminbooking.php">
<br>
<input class="btn-back" type="submit" name="back" value="Back">
</form>
</div>
<div class="foot">
		<footer>
		  <div id="pfoot">Copyright Testing &#169;</div>
		</footer>
	</div>
</body>
</html>

<?php

if (isset($_POST['back'])) {
	
	header("Location: adminhome.php");
}

?>