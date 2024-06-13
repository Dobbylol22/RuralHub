<?php
require 'db.php';
$errors = array();
$username = "";
if (isset($_POST['sub'])){
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$conpass = $_POST['conpass'];

	//validation
	if($pass !== $conpass){
		$errors['pass'] = "The two passwords donot match";
	}
	$userquery = "SELECT * from `users` WHERE username=?";
	$stmt = $con->prepare($userquery);
	$stmt->bind_param('s',$username);
	$stmt->execute();
	$res = $stmt->get_result();
	$userCount = $res->num_rows;
	$stmt->close();
	if($userCount > 0){
      $errors['username']="Username already exists";
	}
	if(count($errors) == 0){
		$reg = "INSERT INTO `users` (`username`, `password`, `confirm password`) VALUES('$username','$pass','$conpass')"; 
	    mysqli_query($con,$reg);	
	    
	}
}

//login 
/*if(isset($_POST['sub1'])){
	$username = $_POST['username1'];
	$password = $_POST['pass1'];
	$sql = "SELECT * from `users` where username='$username'";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
	$user = $res->fetch_assoc();
	if(password_verify($password, $user['password']))
	{
		$_SESSION['id'] = $user['id'];
		$_SESSION['username'] = $user['username'];
		header('Location: index.php');
	    exit();
	}
	else{
		header('Location: home.html');
		exit();
	}
} */


