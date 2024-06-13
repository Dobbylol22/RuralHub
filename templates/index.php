<!DOCTYPE html>
<html>
<head>
<title>Book Your Slot </title>
<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.1">

<style>
body{
	margin:  0;
	padding:  0;
	font-family: 'Lora', serif;
}
body::-webkit-scrollbar{
	display: none;
}

.nav1{
	position: relative;
     /* background-image: url("indbg2.jpg"); */
}

.nav1 .logo{
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: transparent;
}

.nav1 li{
	float: left;
	/* border-right: 1px solid #bbb; */
	padding: 14px 16px;
}

.nav1 li:last-child {
	border-right: none;
}

.nav1 button {
	width: 150px;
	padding: 15px 0;
	border-radius: 50px;
	font-weight: bold;
	border: 2px solid #fff;
	background: transparent;
	color: #fff;
	cursor: pointer;
	font-size: 15px;
	
}
#shape{
	border-radius: 50%;
}

h1, h2{
	margin: 20px auto;
	color: #e75480;
	text-shadow: 1px 1px 0px #ff0000;
}

span{
	color: #8B8000;
}

.nav2 {
	overflow: hidden;
	
	border-radius: 0px;
	position: relative;
	background-image: url("indbg2.jpg"); 

}

/*.nav2 a{
	float: left;
	font-size: 16px;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
} */

.dropdown {
	float: left;
	overflow: hidden;
}

.dropdown .dropbtn{
	font-size: 18px;
	border: none;
	outline: none;
	color: white;
	padding: 14px 16px;
	background-color: inherit;
	font-family: inherit;
	margin: 0;
}

.nav2 a:hover, .dropdown:hover .dropbtn{
	background-color: transparent;
}
.nav1 a:hover, .dropdown1:hover .dropbtn{
	background-color: transparent;
}

.sub-menu{
	display: none;
  	position: fixed;
  	background-color: rgba(0, 0, 0, 0.5);
  	min-width: 160px;
  	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  	z-index: 1;

}

.sub-menu a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.sub-menu a:hover {
  background-color: rgba(0, 0, 0, 0.3);
}

.dropdown:hover .sub-menu {
  display: block;
}

.dropdown1:hover .sub-menu{
	display: block;
}

.header
{
	height: 100vh;
	background-image: linear-gradient(rgba(0,0,0,0.0),rgba(0,0,0,0.0)),url("indbg2.jpg");
	background-position: center;
	background-size: cover;
	background-attachment: fixed;


}
.header h1{
	padding-top: 100px;
	padding-bottom: 0;
	font-size: 55px;
	text-align: center;

}

.header p{
  margin: 10px 0;
  color: white;
  font-size: 30px;

}

.input-group {
	width: 90%;
	max-width: 500px;
	border-radius: 30px;
	background: #fff;
	margin: auto;
	padding: 2px;
}

.form-control{
	border: 0 !important;
	border-radius: 30px 0 0 30px !important;
	margin: 2px;
	box-shadow: none !important;
}

.input-group-text{
	width: 100px;
	background-image: linear-gradient(#8b008b,#c580c5,#8965b3);
	border-radius: 0 !important;
	color: #fff !important;
	padding: 0 25px !important;
	border-radius: 30px !important;
	box-shadow: none;

}

</style>
</head>

<body>
<form action="searchresults.php" method="POST">
<section class="header">
<div class=nav1>
	<ul class="logo">
	<li><img src="logo.jpg" width="70px" height="auto" alt="Avatar" id="shape" align="left"></li> 
	<li><h2>Rural <span>Hub</span></h2></li>
    <li style="float:right">
    	<div class="dropdown1">
    		<button class="dropbtn1"><i class="fa fa-id-badge"> Welcome, User</i></button>
    			<div class="sub-menu">
    			<a href="#">My Bookings </a>
    			<a href="#">My Profile </a>
    			<a href="#"><i class="fas fa-phone-alt">9502800633</i></a>
    			<a href="Explore.html">About Us</a>
    			<a href="logout.php"> Logout</a></li></div>	
    	</div>
	</ul>
</div>
	<div class="nav2">
		<div class="dropdown">
			<button class="dropbtn"> Karnataka<i class="fa fa-caret-down"></i></button>
 				<div class="sub-menu">
 					<a href="#">KA-01</a>
 					<a href="#">KA-02</a>
 					<a href="#">KA-03</a>
 				</div>
 		</div>
 		<div class="dropdown">
			<button class="dropbtn"> Andhra Pradesh<i class="fa fa-caret-down"></i></button>
				<div class="sub-menu">
					<a href="#">AP-01</a>
					<a href="#">AP-02</a>
					<a href="#">AP-03</a>
				</div>
		</div>
		<div class="dropdown">	
			<button class="dropbtn"> Tamil Nadu<i class="fa fa-caret-down"></i></button>
				<div class = "sub-menu">
					<a href="#">TN-01</a>
					<a href="#">TN-02</a>
					<a href="#">TN-03</a>
				</div>
		</div>
		<div class="dropdown">	
			<button class="dropbtn"> Kerala <i class="fa fa-caret-down"></i></button>
		</div>
		<div class="dropdown">
			<button class="dropbtn"> Telangana <i class="fa fa-caret-down"></i></button>
		</div>
      </div>
    </div>
   
   	<div class="container">
    	<center>
    	<h1>Place to work in your Town!</h1>
    	<p>Book your seat</p>
    	<div class="input-group">
    		<input type="text" name="str" class="form-control" placeholder="Search State or City">
    		<div class="input-group-append">
    			<button type="submit" class="input-group-text" name="submit">Search</button>
    		</div>
    	</div>
    	</center>
    </div> 
</section>
</form>

</body>