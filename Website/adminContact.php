<?php

include 'adminauth.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" a href="css/styleA.css">
	<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body background="img/bgtrain.gif">
	<div class="mainpage-admin-contact">
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


$q="SELECT * from contact";
$r=$mysqli->query($q);

if ($r -> num_rows > 0) {
			echo '<div class="overflow">';
			echo "<table border='1'>";
			echo "<tr> <th>Email</th> <th>Name</th> <th>Subject</th> <th>Description</th></tr>";
				
			while ($row=$r -> fetch_assoc()) {
				echo "<tr> <td>".$row["email"]."</td> <td>".$row["name"]."</td> <td>".$row['subject']."</td> <td>".$row['description']."</td> </tr>";
			}

			echo "</table>";
			echo "</div>";
		}else{

			echo "0 result";

				}


?>

<form action="adminContact.php" method="post">
<br>
<input class="btn-back" type="Submit" name="back" value="Back">

<?php

if (isset($_POST['back'])) {
	
	header("Location: adminhome.php");
}



?>

	</form>
	</div>
	<div class="foot">
		<footer>
		  <div id="pfoot">Copyright Testing &#169;</div>
		</footer>
	</div>
</body>
</html>