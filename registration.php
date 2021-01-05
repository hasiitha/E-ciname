
<!DOCTYPEhtml>
<?php
	require_once('inc/connection.php');

?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title> Registration Form</title>
		<script src="js/registration.js" > </script>
		
		<style>
		div {
  font-size-adjust: 0.58;
}

		</style>
	</head>
	
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
			<li class="active"><a href="registration.php">REGISTER</a></li>
			<li><a href="begin.php">LOG IN</a></li>
			<li><a href="contactUs.php">CONTACT US</a></li>
			
		</ul>
		<br/>
		
		<hr>
		<br/><br/><br/>
<center>
		<div class="form-registration">
		<center>	
			<h1><b>Registration Form</b> </h1>
		</center><br><br><br/>
		<center>
			<image src = "images/user.jpg" alt = "user" length ="200" width = "200" />
		</center>
		<hr/>
		
		<center>
		<div class="styling">
		<form method = "post" onsubmit="return checkpassword()" id = "frm1" action ="reg.php">
			First name :<br/>
			<input type = "text" id = "fstame"  name ='f_name' placeholder ="First Name" required><br>
			Last name : <br/>
			<input type = "text" id = "lstame" name ='l_name' placeholder ="Last Name " required>
			<br/> <br/>
			Gender :<br/>
			<input type = "radio" id = "male" name = "gender" value = "Male" > Male
			<br/> 
			<input type = "radio" id="female" name = "gender" value = "female" >Female 
			<br/>
			<br/>
			Date of Birth :<br>
			<input type = "date" name = 'dob' id = "birth">
			<br><br/>
			Email <br/>
			<input type = "email" id = "eml" name ='email' required  pattern ="[0-9a-z*&%@]{0,100}+@[a-z0-9]{0,100}+.[a-z]{0,100}" placeholder ="Hasitha@example.com" required>
			<br><br>
			Telephone Number :<br/>
			<input type = "phone" id = "mobNumb" name ='phone' pattern = "[0-9]{10}" placeholder ="+94*********" required>
			<br><br>
			Password <br>
			<input type = "password" name ='password'  id = "pwrd"  required >
			<br><br/>
			Re-enter Password <br>
			<input type = "password" id = "cnfrm" name = 'cpassword' required >
			<br><br/>
			<b>Accept privacy &  policy and terms </b>
			<input type = "checkbox" id = "checkbx"  name = terms onclick = "enableButton()">
			<hr/>
			<br/><br/>
			<div class = "buttns">
			<input type = "submit" value="Submit" id = "sbmt" name = 'submit' disabled>
			<br><br>
			<input type ="reset" value="Reset" id ="rest" >
				<br/><br/>
			</div>
					
			</center>
			</div>

		</form>
</center>
	</body>
	<br/><br/><br/><br/>
	
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
