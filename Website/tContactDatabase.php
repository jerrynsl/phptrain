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


	

if($r -> num_rows >0){

	echo "<table border='1'";
		echo "<tr>";
		echo "<th>Email</th>";
		echo "<th>Name</th>";
		echo "<th>Subject</th>";
		echo "<th>Description</th>";
		echo "</tr>";
			
				while ($row=$r->fetch_assoc()) {
					echo "<tr>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['subject']."</td>";
					echo "<td>".$row['description']."</td>";
					echo "</tr>";
				}
		echo "</table>";
}else{

	echo "No record found";
}


?>