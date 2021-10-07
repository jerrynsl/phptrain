<?php

include 'C:/xampp/htdocs/WWW/conn_db.php';
$database="adminaccounts";
$mysqli=new mysqli($host,$user,$password,$database);
if (mysqli_connect_errno())
{
 echo mysqli_connect_error();	
}

if (isset($_POST['login'])) {
	
	$password=$_POST['password'];

	$q='SELECT * from admin';
	$r=$mysqli->query($q);
	$row=mysqli_fetch_array($r);

	if ($_POST['name']==$row['adminname'] && $password==$row['password']) {
		header('Locataion:adminhome.php');
	}else{

		echo "<div class='err'>Login Failed
				<br>
				Please Check your name and password.
				</div>";

	}

}




?>


<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" a href="css/style.css">
	<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
</head>
</html>
<body background="img/bgtrain.gif">
	<div class="mainpage">
		<div class="menu">
			<?php include "adminmenu.php"; ?>
		</div>
	<div class="container">
	<img src="img/Chino.png"/>
		<form method="post" action="aLogin.php">
		<div class="form-input">
		<input type="text" name="name" placeholder="Enter the Admin name"/>	
		</div>
		<div class="form-input">
		<input type="password" name="password" placeholder="password"/>
		</div>
		<input type="submit" name="login" value="LOGIN" class="btn-login"/>
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