<!--Social Media Login Page for Creating User account in our website. -->

<?php 
  require_once "config.php";
  
  $loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Yout ticket</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      crossorigin="anonymous"
    />

<style>
body{
	margin: 0;
	padding: 0;
	font-size: 16px;
	color: #777;
	font-family: sans-serif;
	 background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(formbg.jfif); 
	/* background-position: center; */
	 background-size: cover; +
	font-weight: 300;
}

.login-box{
	position: relative;
	margin: 10% auto;
	height: 400px;
	width: 600px;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  border-radius: 10px;
}

.left-box{
	position: absolute;
	top: 0;
	left: 0;
	border-radius: 10px;
	box-sizing: border-box;
	width: 300px;
	height: 400px;
	background-image: linear-gradient(#F98D55,#E2F955,#87F955);
	overflow: hidden; 
	opacity: 80%;
}

h1{
	margin-bottom: 20px;
	font-size: 28px;
	color: #fff;
}



.right-box{
	position: absolute;
	top: 0;
	right: 0;
	box-sizing: border-box;
	padding: 40px;
	width: 300px;
	height: 400px;
	background-image: linear-gradient(#F95555,#9E55F9,#F9E755);
	background-position: center;
	background-size: cover;
	border-radius: 10px;
	opacity: 80%;
}

.button-box{
	width: 220px;
	margin:25px auto;
	position: relative;
	box-shadow: 0 0 20px 9px #ff61241f;
	border-radius: 30px;
}

.right-title {
	display: block;
	margin-bottom: 40px;
	font-size: 20px;
	color: #fff;
	text-align: center;
	text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
}


.fab, .far{
	margin-bottom: 20px;
	padding: 4px;
	width: 220px;
	height: 36px;
	border-radius: 8px;
	font-size: 15px;
	transition: 0.2s;
	color: #fff;
    cursor: pointer;
}

.fa-facebook-f{
	background: #32508e;
}

.fa-twitter {
	background: #55acee;
}

.fa-linkedin {
	background: #0077b5;
}

.fa-envelope{
	background: #dd4b39;
}

.or{
	position: absolute;
	top: 180px;
	left: 280px;
	width: 40px;
	height: 40px;
	background: #efefef;
	border-radius: 50%;
	line-height: 40px;
	text-align: center;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
}


.toggle-btn{
	padding: 10px 30px;
	cursor: pointer;
	background: transparent;
	border: 0;
	outline: none;
	position: relative;
	font-weight: bold;
	}

#btn{
	top: 0;
	left: 0;
	position: absolute;
	width: 110px;
	height: 100%;
	background: linear-gradient(to right,#ff105f,#ffad06);
	border-radius: 30px;
	transition: .5s;

}

.input-group{
	top: 100px;
	position: absolute;
	width: 280px;
	transition: .5s;

}
.input-field{
	width: 250px;
	padding: 10px 0;
	margin: 5px 10px;
	border-top: 0;
	border-left: 0;
	border-right: 0;
	border-bottom: 1px solid #999;
	outline: none;
	background: transparent;
}

.submit-btn{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: 8px auto;
	background: linear-gradient(to right,#ff105f,#ffad06);
	border: 0;
	outline: none;
	border-radius: 30px;
	font-weight: bold;
	font-size: 15px;
}

.submit-btn:hover,
.submit-btn:focus{
	background: #ff5722;
	transition: 0.2s;
}

span{
	color: black;
	font-weight: bold;
	font-size: 15px;
}

.check-box{
	margin: 30px 10px 30px;
}
#login{
	left: 20px;
}
#register{
 left: 350px;
}
</style>
</head>
<body>

	// code...

<div class="login-box">
	<div class="left-box">
		<div class="button-box">
			<div id="btn"></div>
			<button type="button" class="toggle-btn" onclick="login()">Log In</button>
			<button type="button" class="toggle-btn" onclick="register()">Register</button>
		</div>
		<!--Log In -->
	<div>
		<?php 
		require('db.php');
		if(isset($_POST['sub1'])){
			$user = stripslashes($_REQUEST['username1']);
			$user = mysqli_real_escape_string($con,$user);
			$pass = stripslashes($_REQUEST['pass1']);
			$pass = mysqli_real_escape_string($con,$pass);
			$query = "SELECT * FROM `users` WHERE username='$user' and password='$pass'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			if(!$result || mysqli_num_rows($result)==1){
				$_SESSION['username'] = $user;
				header("Location: index.php");
			} else{
				$_SESSION['message']="Incorrect Username or Password."; 
        header("location:smlogin.php");
        echo '<h3>Invalid username or password</h3>'; 
			}

		}else{

		?>
		<form id="login" class="input-group" method="post">
			<input type="text" class="input-field"  name="username1"  placeholder="userID" required>
			<input type="password"  class="input-field" name="pass1"placeholder="Enter Password" required><br>
			<input type="checkbox" class="check-box"><span>Remember Password</span>
			<button type="submit" name="sub1" class="submit-btn">Log In</button>
		</form>
	<?php } ?>
		</div>
		<!--Register form -->
		<div>
		<?php 
		require_once 'auth.php';
		
		?>

		<form id="register" class="input-group" action="#" method="POST">
			<input type="text" class="input-field" name="username" value="<?php echo $username; ?>" placeholder="userID" required>
			<input type="password" class="input-field" name="pass" placeholder="Enter Password"><br><br>
			<input type="password" class="input-field" name="conpass" placeholder="Enter confirm-password">
			<input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
			<button type="submit" name="sub" class="submit-btn">Register</button>
		</form>
		    </div>
		</div>
	
	<script type="text/javascript">
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById('btn');
		function register(){
			x.style.left = "-300px";
			y.style.left = "20px";
			z.style.left = "110px";
		}
		function login(){
			x.style.left = "20px";
			y.style.left = "350px";
			z.style.left = "0";
		}
	</script>
	<!--Social login form -->
	<div class="right-box">
		<span class="right-title">Sign Up with <br>Social Network</span>
		<button class="fab fa-facebook-f"> Log in with facebook </button>
		<button class="fab fa-linkedin"> Log in with LinkedIn</button>
		<button onclick="window.location = '<?php echo $loginURL?>';" class="far fa-envelope"> Log in  with Google+</button>
	</div> 
	<div class="or">OR</div>
</div> 
</body>
</html>