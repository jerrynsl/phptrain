<?php
include 'C:/xampp/htdocs/WWW/conn_db.php';
$database="useraccounts";
$mysqli=new mysqli($host,$user,$password,$database);
if (mysqli_connect_errno())
{
 echo mysqli_connect_error();	
}
$error='';
$firstname='';
$lastname='';
$email='';
$phonenumber='';
$password='';

if (isset($_POST['sign'])) {
	

	if (empty($_POST['firstname'])){
 		$error.='Please enter your first name<br>';	

	}
	if (empty($_POST['lastname'])){
		 $error.='Please enter your last name<br>';	
	}
	if (empty($_POST['email'])){
 		$error.='Please enter your email<br>';	
	}
	if (empty($_POST['phonenumber'])){
		$error.='Please enter your phone number<br>';	
	}
	if (empty($_POST['password'])){
		$error.='Please enter your password<br>';	
	}

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phonenumber=$_POST['phonenumber'];
	$password=$_POST['password'];
}

if(isset($_POST["sign"])){

if (empty($error)) {


$query="insert into user values(null,
	  '".$_POST['firstname']."',
	  '".$_POST['lastname']."',
	  '".$_POST['email']."',
	  '".$_POST['phonenumber']."',
	  MD5('".$_POST['password']."'))";
$result=$mysqli->query($query); 
	  if ($result){		  
		  echo '<div class="errno">Record succesful</div>';
		  	$firstname='';
			$lastname='';
			$email='';
			$phonenumber='';
			$password='';
	  }
  }else{
  		echo '<div class="err">'.$error.'</div>';
  }
}

?>
<html>
<head>
	<title> Registration </title>
	<link rel="stylesheet" a href="css/styleA.css">
	<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body background="img/bgtrain.gif">
	<div class="mainpage">
		<div class="menu">
			<?php include "ticketmenu.php"; ?>
		</div>
	<div class="container">
	<img src="img/Chino.png">
		<form method="post" action="ticketRegister.php">
			<h1 class="head">Register Form</h1>
		<div>
			<p>First Name<br>
			<input type="text" name='firstname' value="<?php echo $firstname;?>"placeholder="Enter Your First Name"/>
			</p>	
		</div>

		<div>
			<p>Last Name<br>
			<input type="text" name="lastname" value="<?php echo $lastname;?>" placeholder="Enter Your Last Name"/>
			</p>
		</div>

		<div>
			<p>Email<br>
			<input type="text" name="email" value="<?php echo $email;?>"placeholder="Enter Your Email"/>	
			</p>
		</div>

		<div>
			<p>Phone Number<br>
			<input type="text" name="phonenumber" value="<?php echo $phonenumber;?>" placeholder="Enter Your Phone Number"/>
			</p>
		</div>


		<div>
			<p>Password<br>
			<input type="password" name="password" value="<?php echo $password;?>" placeholder="Enter Your Password"/>	
			</p>
		</div>

		<input type="submit" name="sign" value="Sign Up" class="btn-signup"/>
		<br>
		
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