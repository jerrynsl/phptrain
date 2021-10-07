<?php
include('C:/xampp/htdocs/WWW/conn_db.php');
$database='train';
$mysqli=new mysqli($host,$user,$password,$database);
if (mysqli_connect_errno())
{
 echo mysqli_connect_error();	
}

$error='';
$cusname='';
$origin='';
$month='';
$day='';
$year='';
$time='';
$number='';


if (isset($_POST['submit'])) {

$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
	
	if (empty($_POST['name'])){
		$error.='Please enter your name<br>';
	}

	if (empty($_POST['origin'])) {
		$error.='Please select your origin<br>';
	}

	if (checkdate($month,$day,$year)==false){
 		$error.='The date is invalid<br>';	

	}else{ 

	};

	if (empty($_POST['number'])){
 		$error.='Please enter the number of ticket<br>';	

	}


}

if (isset($_POST['submit'])) {
	if (!empty($error)) {
		  echo '<div class="err">'.$error.'</div>';
	}else{

		echo "<div class='errno'>Your record has been added, Please head to the counter and tell your name to get your booking ticket.</div>";
	}
}



 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
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
			<form action="booking.php" method="post">
				<div>
					<p>Name:<br>
					<input class="name" type="text" name="name" placeholder="Enter your name">
					</p>
				</div>

				<div>
					<p>Select Your Origin:<br>
						<select class="ori" name="origin">
						<option value=""></option>
						<?php
							$query1="select * from location";
							$result1=$mysqli->query($query1);
							while ($row1=$result1->fetch_assoc())
								{
				 				echo '<option value="'.$row1['lid'].'">'.$row1['location'].'</option>';
						}
							echo '</select><br />';
						?>
						</select>
					</p>
				</div>

				<div>
					<p>Date:<br>
						<select class="year" name="year">
							<option value="2019">2019</option>
							<option value="2020">2020</option>
						</select>
						-
						<select class="month" name="month">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						-
						<select class="day" name="day">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
					</p>
				</div>

				<div>
					<p>Time:<br>
						<select class="ori" name="time">
							<option value="6am">6:00AM</option>
							<option value="7am">7:00AM</option>
							<option value="8am">8:00AM</option>
							<option value="9am">9:00AM</option>
							<option value="10am">10:00AM</option>
							<option value="11am">11:00AM</option>
							<option value="12pm">12:00PM</option>
							<option value="13pm">13:00PM</option>
							<option value="14pm">14:00PM</option>
							<option value="15pm">15:00PM</option>
							<option value="16pm">16:00PM</option>
							<option value="17pm">17:00PM</option>
							<option value="18pm">18:00PM</option>
							<option value="19pm">19:00PM</option>
							<option value="20pm">20:00PM</option>
						</select>
					</p>
				</div>
				
				<div>
					<p>The number of ticket:<br>
						<input type="number" name="number" min="1">
					</p>
				</div>
				<?php
				if (isset($_POST['submit'])){
				  if (empty($error)){
				  	$q="SELECT * from location where lid=".$_POST['origin'];
					$r=$mysqli->query($q);
					echo "<p>Details:</p>";
					echo "<table border='1'>";
					echo "<tr> <th>Name</th> <th>Origin</th> <th>Date</th> <th>Time</th> <th>Number of Tickets</th></tr>";
					echo '<tr><td>'.$_POST['name'].'</td>';
					while ($row=$r->fetch_assoc()) {
					echo "<td>".$row['location']."</td>";
					echo "<td>".$_POST['year']."-".$_POST['month']."-".$_POST['day']."</td>";
					echo "<td>".$_POST['time']."</td>";
					echo "<td>".$_POST['number']."</td></tr>";
					echo "</table>";
					echo "<br>";
					$q2="INSERT into booking values(null,
					  		'".$_POST['name']."',
					  		'".$row['location']."',
					  		'".$_POST['year']."-".$_POST['month']."-".$_POST['day']."',
						  	'".$_POST['time']."',
					  		'".$_POST['number']."')";

					 	$r2=$mysqli->query($q2);
				}	
				}	
				}
				?>
			<input type="submit" name="submit" value="Submit" class="btn-login">

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