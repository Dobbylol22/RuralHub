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
    <meta name="viewport" content="width=device-width, initial-scale=0.1" http-equiv="Content-Type">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <!-- Mobiscroll JS and CSS Includes -->
    <link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
    <script src="js/mobiscroll.javascript.min.js"></script>

    <script>
        // Ignore this in your implementation
        window.isMbscDemo = true;
    </script>

<style>
body{
	margin:  0;
	padding:  0;
	font-family: 'Lora', serif;
	background-image: linear-gradient(rgba(0,0,0,0.0),rgba(0,0,0,0.0)),url("indbg2.jpg");	
	background-attachment: fixed;

}
body::-webkit-scrollbar{
	display: none;
}

.nav1{
	position: relative;
    
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


.input-group {
	width: 60%;
	max-width: 400px;
	border-top-left-radius: 50px;
	border-bottom-left-radius: 50px;
	padding: 12px 16px;
	float: right;
}

.input-group-text{
	width: 100px;
	background-image: linear-gradient(#8b008b,#c580c5,#8965b3);
	color: #fff !important;
	padding: 0 25px !important;
	border-top-right-radius: 50px !important;
	border-bottom-right-radius: 50px !important;
	box-shadow: none;

}

.input-group-append button:hover{
	background: transparent;
}

h1{
	font-size: 20px;
	text-align: center;

}

#slideshow { 
  margin: 0px 5px; 
  position: relative; 
  width: 1200px; 
  height: 500px; 
  padding: 10px; 
  box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}

#slideshow > div { 
  position: absolute; 
  top: 10px; 
  left: 10px; 
  right: 10px; 
  bottom: 10px;
}

.mySlides{
	width: 1180px;
	height: 480px;
}

.left-box{
	position: absolute;
	border-radius: 10px;
	box-sizing: border-box;
	width: 700px;
	height: 700px;
	background: rgba(0, 0, 0, 0.5);
	overflow: hidden; 
	opacity: 80%;
}

.left-box h1{
	font-size: 40px;
	font-weight: bold;
}
h5{
	color: whitesmoke;
	opacity: 80%;
	font-weight: inherit;
}
h3 {
	font-weight: inherit;
	color: white;

}
h4 {
	font-weight: inherit;
	color: white;
}
p{
	text-align: justify;
	color: white;
	margin: 10px 20px;
	font-size: 20px;
}

.right-box{
	position: absolute;
	left: 720px; 
	box-sizing: border-box;
	padding: 40px;
	width: 500px;
	height: 450px;
	background: rgba(0, 0, 0, 0.5);
	background-position: center;
	background-size: cover;
	border-radius: 10px;
	opacity: 80%;

}
table{
	border : 1px solid #fff;
	color: white;
	margin: 20px 20px;
}
th{
	text-align: center;
	font-size: 20px;
	border: 1px solid #fff;
}
td{
	text-align: center;
	border-column: 1px solid #fff; 
}

.right-box .nav3{
	margin: -40px -40px;
	width: 480px;
	height: 50px;
	text-align: center;
}

.nav3 h1{
	font-size: 30px;
  font-weight: bold;
}

input {
  width: 100%;
 /* margin: 0 0 5px 0; */
  padding: -10px;
  font-family: arial, verdana, sans-serif;
  font-size: 14px;
  box-sizing: border-box;
  -webkit-appearance: none; 
  border-top: 0;
	border-left: 0;
	border-right: 0;
	border-bottom: 1px solid #999;
	outline: none;
	background: transparent;
}

.client-info input{
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

.client-info h4{
   font-size: 18px;
}
label h4{
	font-size: 18px;
}
.details h4, h5{
	font-size: 18px;
}

.totalamount h4{
	font-size: 18px;
}

.bnbtn{
	float: right;
	margin: -30px -150px;
	width: 250px;
	height: 250px;
}

.bnbtn button{
	border-radius: 10px;
  background-image: linear-gradient(#8b008b,#c580c5,#8965b3);
  color: white;
}
.bnbtn button:hover{
	background: transparent;
}

.demo-mobile-desktop-display input{
  width: 260px;
	padding: 10px 0;
	margin: 5px 10px;
	border-top: 0;
	border-left: 0;
	border-right: 0;
	border-bottom: 1px solid #999;
	outline: none;
	background: transparent;
}

.demo-mobile-desktop-display button{
	border: 1px solid black;
	border-radius: 10px;
  background-image: linear-gradient(#8b008b,#c580c5,#8965b3);
	color: white;
	float: right;
	margin: 0px 45px; 
}

.demo-mobile-desktop-display button:hover{
	background: transparent;
}
</style>
</head>
<body>
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
		<form action="#" method="POST">
		<div class="input-group">
			<input type="text" name="str" class="form-control" placeholder="Search State or City">
    		<div class="input-group-append">
    			<button type="submit" class="input-group-text" name="submit">Search</button></div>
      </div></form>
     </div>
   
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="feature-box">
    
		<?php
			include('db.php');
			$str = $_POST['str'];
			if(isset($_POST['sub'])){
				$str = mysqli_real_escape_string($con,$str);
				$sql="select * from ruralareas where id ='$str'";
				$res=mysqli_query($con,$sql) or die(mysqli_error($con));
			 	while($row=mysqli_fetch_assoc($res)){
					$title= $row['title'];
					$image = $row['image'];	
					$cost = $row['cost'];
					$location = $row['location'];
					$id = $row['id'];
					$image1 = $row['buildimg'];

		?>
    <div id="slideshow">
  <div>
    <img class="mySlides" src="<?php echo $image; ?>">
  </div>
  <div>
    <img class="mySlides" src="<?php echo $image1; ?>">
  </div>
 </div>    
 
  <script>
    $("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('#slideshow');
}, 3000);

</script>
 <div class='content'>
 	<div class='left-box'>
 	<h1><?php echo $title?></h1>
 	<h5>&nbsp<i class="fas fa-map-marker-alt">&nbsp<?php echo $location?></i></h5>
 	<br><br>
 	<h3>&nbsp<i class="far fa-eye"> Overview</i></h3>
 	<p> <i style="font-family: times new roman;"><q>Rural Hub</q>is a shared office space, rented for companies who is having corporate office in major cities and wish to have their employees working out of their home town. This space will have all the basic infrastructure and amenities for an employee to work peacefully and efficiently. This facilities are available only in the rural towns. </i></p>
  <br><br>
  <h3>&nbsp<i class="fas fa-chair"> Seat Price</i></h3>
  <table width="80%" cellspacing="0" cellpadding="5">
  	<thead>
  		<th>#People</th>
  		<th>Hours</th>
  		<th>Timing</th>
  		<th>Price(INR)</th>
  	</thead>
  	<tbody>
  		<tr>
  			<td>1</td>
  			<td>1-4 hours</td>
  			<td>First Half</td>
  			<td>INR 150</td>
  		</tr>
  		<tr>
  			<td>1</td>
  			<td>1-4 hours</td>
  			<td>Second Half</td>
  			<td>INR 150</td>
  		</tr>
  		<tr>
  			<td>1</td>
  			<td>8 hours</td>
  			<td>Full day</td>
  			<td>INR 225</td>
  		</tr>
  		<tr>
  			<td>1</td>
  			<td>40 hrs</td>
  			<td>1 week</td>
  			<td>INR 900</td>
  		</tr>
  		<tr>
  			<td>1</td>
  			<td>160 hrs</td>
  			<td>1 Month</td>
  			<td>INR 2800</td>
  		</tr>
  	</tbody>
  </table>
 	</div>
 	<div class="right-box">
 		<div class="nav3">
 			<h1>Book Now</h1>
 		</div><br>
 		<div class="details">
 			&nbsp&nbsp&nbsp
 			<h4>&nbsp&nbsp&nbsp<i class="fas fa-info-circle"> Details</i></h4>
 			<h5>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $title ?><br>
 			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $location ?></h5>
 		</div>
 		<div class="demo-mobile-desktop-display">
 			<div style="height:100%">
 				<div id="demo-inline"></div>
 				<label>
 					<h4><i class="fas fa-carrot"> Range</i></h4>
 					<input id="picker" mbsc-input placeholder="Please select the range...">
 					<button onclick="onClick('#picker')">SET</button>
 				</label>
    	</div>
    </div>
    <script>
    	mobiscroll.datepicker('#picker',{
    		controls: ['datetime'],
    		 select: 'range',
    		touchUi: true,
    		theme: 'windows',
        themeVariant: 'dark'
        
    	});
    </script>
 		<div class="client-info">
 			<h4>&nbsp&nbsp&nbsp&nbsp<i class="fas fa-users"> Name:<input type="text" name='username' placeholder="please enter your name" required></i><br>
 			<h4>&nbsp&nbsp&nbsp&nbsp<i class="fas fa-mobile-alt"> Mobile:<input type="number" name="mobnum" placeholder="please provide your mobile number"></i></h4>
 		</div>
 		<div class="totalamount">
 		<h4>Total Amount: <n id="tm"> </n></h4>
 		<h4>Hours: <n id="hrs"></n> &nbsp&nbsp&nbsp Days: <n id="days"></n></h4>
 		</div>

    <div class="bnbtn">
    	<button type="submit">Book Now</button>
    </div>
    <script>
      function onClick(elem){
      var $this = $(elem);
      var date = $this.val();
      date = date.split("-");
      var date1 = date[0];
      var date2 = date[1];
      date1 = new Date(date1);
      var date1ms= date1.getTime();
      date2 = new Date(date2);
      var date2ms = date2.getTime();
      var totalms = date2ms-date1ms;
      var hours = (totalms/(1000*60*60)).toFixed(1);
      if(hours<10){
      if(hours<=4.0){
        document.getElementById('hrs').innerHTML = hours;
      	document.getElementById("tm").innerHTML = hours*37.5;
      	document.getElementById('days').innerHTML = ' ';
      }
      else if(hours>4.0 && hours<8.0){
      	document.getElementById('hrs').innerHTML = hours;
      	document.getElementById("tm").innerHTML = hours*37.5;
      	document.getElementById('days').innerHTML = ' ';
      }
      else if(hours==8){
      	document.getElementById('hrs').innerHTML = hours;
      	document.getElementById('tm').innerHTML = 225;
      	document.getElementById('days').innerHTML = ' ';
      }
      else if(hours>8){
      	document.getElementById('hrs').innerHTML = hours;
      	document.getElementById('tm').innerHTML = 'only 8hrs per day';
      	document.getElementById('days').innerHTML = ' ';
      }
    }
    else{
      var days = Math.round((totalms)/(1000*60*60*24));
      if(days>0 && days<7){
      	document.getElementById("days").innerHTML = days;
      	document.getElementById("tm").innerHTML = days*225;	
      	document.getElementById("hrs").innerHTML = '';				 
      }
      else if(days==7){
      	document.getElementById("days").innerHTML = days;
      	document.getElementById('tm').innerHTML = 900;
        document.getElementById("hrs").innerHTML = 40;				
     	}
      else if(days>7 && days<29){
      	document.getElementById("days").innerHTML = days;
      	document.getElementById('tm').innerHTML = days*128;
        document.getElementById("hrs").innerHTML = ' ';				
     	}
      else if(days==30){
      	document.getElementById("days").innerHTML = days;
      	document.getElementById('tm').innerHTML =  2800;
				document.getElementById("hrs").innerHTML = 160;
      }
    }
    }
    </script>

	<?php
		}
	}
	?>		
		
</section>

</body>

