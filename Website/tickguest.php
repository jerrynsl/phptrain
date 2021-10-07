<?php


include 'C:/xampp/htdocs/WWW/conn_db.php';
$database="train";
$mysqli=new mysqli($host,$user,$password,$database);
if (mysqli_connect_errno())
{
 echo mysqli_connect_error();	
}


$error='';
$email='';
$name='';
$subject='';
$description='';


if (isset($_POST['submit'])) {

	
	if (empty($_POST['email'])){
		$error.='Please enter your email<br>';
	}

	if (empty($_POST['name'])) {
		$error.='Please enter your name<br>';
	}

	if (empty($_POST['subject'])){
 		$error.='Please enter your subject<br>';	

	}

	if (empty($_POST['description'])){
 		$error.='Please enter your description<br>';	

	}

	$email=$_POST['email'];
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$description=$_POST['description'];
}


if (isset($_POST['submit'])){
 
  if (empty($error)){
	  $query="insert into contact values(null,
	  '".$_POST['email']."',
	  '".$_POST['name']."',
	  '".$_POST['subject']."',
	  '".$_POST['description']."')";
	 
	  $result=$mysqli->query($query); 
	  if ($result){
		  
		  echo '<div class="errno">Thank you for your submission, We will reply ASAP!</div>';
	  }
  }else{
	  
	  echo '<div class="err">'.$error.'</div>';
	  
  }
}	  

?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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
			<form action="tickguest.php" method="post">
			<div>
				<p>Email<br>
				<input type="text" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
				</p>
			</div>
			
			<div>
				<p>Name<br>
				<input type="text" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
				</p>
			</div>

			<div>
				<p>Subject<br>
				<input type="text" name="subject" placeholder="Enter your subject" value="<?php echo $subject; ?>">
				</p>
			</div>

			<div>
				<p>Description<br>
				<textarea type="text" rows="10" cols="100" name="description" placeholder="Describe your question"><?php echo $description; ?></textarea>
				</p>
			</div>
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