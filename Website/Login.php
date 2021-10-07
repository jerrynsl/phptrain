<?php

include 'C:/xampp/htdocs/WWW/conn_db.php';
$database="useraccounts";
$mysqli=new mysqli($host,$user,$password,$database);
if (mysqli_connect_errno())
{
 echo mysqli_connect_error();	
}

if (isset($_POST['login'])) {

	$password=MD5($_POST['password']);

	$q="SELECT * from user where email='".$_POST['email']."' and password='".$password."'";
	$r=$mysqli->query($q);
	$row=mysqli_fetch_array($r);
	
	

	if ($_POST['email']==$row['email'] && $password==$row['password']) {

				require_once('session.php');
				$_SESSION['email']=$row['email'];
				$_SESSION['firstname']=$row['fname'];
			
			
				header("Location: tickethomebutlogin.php");

			}else{

				echo "<div class='err'>Invalid login, please check again on E-mail or Password</div>";
			}

		


}
?>
<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" a href="css/style.css">
	<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body background="img/bgtrain.gif">
	<div class="mainpage">
		<div class="menu">
			<?php include "ticketmenu.php"; ?>
		</div>
		<div class="container">
		<img src="img/Chino.png">
			<form method="post" action="Login.php">
			<div class="form-input">
			<input type="text" name="email" placeholder="Enter the Email"/>	
			</div>
			<div class="form-input">
			<input type="password" name="password" placeholder="Password"/>
			</div>
			<input type="submit" name="login" value="LOGIN" class="btn-login"/>
			<br>
			<br>
			<br>
			<a class="sun" href="ticketRegister.php" >Sign Up Now!</a>
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