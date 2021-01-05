

<?php

require_once('inc/connection.php');

?>

<html>

<head>

<link rel="stylesheet" type="text/css" href="style.css">
<script src="js/login.js" ></script>

</head>

<title>E-Cinema | Log in</title>

<body>
<center>
		<img src="images/logo 2.png" class="logo">
		</center>
		<div id="registration"><a href="userAcc.html"><img src="images/Login-1.png" height="90px" width="100px"><h3>User Account</h3></a></div> 
		
		<ul class="menu">
		
			<li><a href="Home.php">HOME</a></li>
			<li><a href="Movies.php">MOVIES</a></li>
			<li><a href="theater.php">THEATERS</a></li>
			<li><a href="tickets.php">BOOK TICKETS</a></li>
			<li><a href="registration.php">REGISTER</a></li>
			<li class="active"><a href="begin.php">LOG IN</a></li>
			<li><a href="contactUs.php">CONTACT US</a></li>
			
		</ul>
		<br/>
		
		<hr>
		<br/><br/><br/>

<br><br><br>




<center>
<div class="login-form">
<h1 class="log" return onlogin()><b>Log In</b></h1><br><br><br>
<form method="post" action="log.php" onsubmit="return enableButton()">
<center>
Email : 
<input type="email" id="eml" placeholder="abc@gmail.com" name= "email"  required><br><br><br>

Password :
<input type="password" id="pwd" pattern="(?=.+\d)(?=.+[a-z])(?=.+[A-Z]){5,10}" name ="password" ><br><br><br>

<input type="submit" id="submitBtn" value="SUBMIT" name ="submit" ><br><br><br>

</form>

<a href="">Forgot your password</a> |<a href="registration.html"> Create new account</a><br><br><br><br><br><br><br>
</center>
</div>
</center>


 </body> 

<br/><br/><br/>

<footer>
	<div class="footer_main">
	<div class="footer_socialMedia">
		<ul>
			<li type="none"><a href="https://www.facebook.com/" target="blank"><img class="img" src="images/facebook.png"></a></li>
			<li type="none"><a href="https://www.instagram.com/" target="blank"><img class="img" src="images/instagram.png"></a></li>
			<li type="none"><a href="https://twitter.com/" target="blank"><img class="img" src="images/twitter.png"></a></li>
		</ul>
	</div>
	
	<div class="footer_menu">
		<ul>
			<li><a class="a1" href="contactUs.html">Contact Us</a></li>
			<li><a class="a1" href="registration.html">Register</a></li>
			<li><a class="a1" href="Home.html">Home</a></li>
			<li><a class="a1" href="movies.html">Movies</a></li>
			<li><a class="a1" href="theater.html">Theatres</a></li>
			<li><a class="a1" href="tickets.html">Book Tickets</a></li>
		</ul>
		
	</div>
	</div>
	<div class="footer_bottom">
		<p>Design by: Group MLB_05.2_02</p> 
		
	</div>
	
	
	</footer>
</html>