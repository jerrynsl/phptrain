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
		  
		  echo 'Thank you for your submission, We will reply ASAP!';
	  }
  }else{
	  
	  echo '<div style="color:red">'.$error.'</div>';
	  
  }
}	  

?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>

<h2>Contact Us</h2>

<form action="ticketContact.php" method="post">

Email:<input type="text" name="email" placeholder="Enter your email" value="<?php echo $email; ?>"><br>
<div style="color:red" ></div><br>

Name:<input type="text" name="name" placeholder="Enter your name" value="<?php echo $name; ?>"><br>
<div style="color:red"></div><br>

Subject:<input type="text" name="subject" placeholder="Enter your subject" value="<?php echo $subject; ?>"><br>
<div style="color:red"></div><br>	

Description:<br>
<textarea type="text" rows="10" cols="100" name="description" placeholder="Describe your question" value="<?php echo $description; ?>"></textarea>
<div style="color:red"></div><br>

<input type="submit" name="submit" value="Submit">

</form>

</body>
</html>