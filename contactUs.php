<!DOCTYPE html>

<?php    
    
    //connection =mysqli_connect(dbserver,dbuser,dbpass,dbname);
$connection = mysqli_connect('localhost','root','','userdb');
//mysqli_connect_errorno(); mysqli_connect_error();

//checking the connection
if(mysqli_connect_errno()){
    die('Database connection failed' . mysqli_connect_errno());
}else{

    echo "connection succesful.";
}
?>
<html>
<head>
	<style type="text/css">
	<title>E-Cinema(Contact Us)</title>
	</style>
<link rel="stylesheet" type="text/css"href="style.css">
</head>

<body>
<center>
		<img src="images/logo 2.png" class="logo">
		</center>
		<div id="registration"><a href="userAcc.html"><img src="Login.png" height="90px" width="100px"><h3>User Account</h3></a></div> 


		<ul class="menu">
		
			<li><a href="Home.php">HOME</a></li>
			<li><a href="Movies.php">MOVIES</a></li>
			<li><a href="theater.php">THEATERS</a></li>
			<li><a href="tickets.php">BOOK TICKETS</a></li>
			<li><a href="registration.php">REGISTER</a></li>
			<li><a href="begin.php">LOG IN</a></li>
			<li class="active"><a href="contactUs.php">CONTACT US</a></li>
			
		</ul>
		<br/>
		
		<hr>
		<br/><br/><br/>

<div class="form">
<br><br><br><br>
<div class="rows">


<div class="doc">
<h2>Contact Us</h2>
<br>
<br>

<div class="contact-title">
		
	</div>
	
	<div class="contact-form">
		<form id="name" method="post" action="contact.php" onsubmit ="return sub()" >
		<div>
			<label>Name:</label>
			<input name="name" type="text" class="name" placeholder="Enter Your Name" required><br><br>
		</div>
		<div>
			<label>Email:</label>
			
			<input type ="email" name="cnfrm_email" id="password" placeholder="Enter Your Email" value="" >
			
		</div>
		<div>
			<label>Message:</label>
			<textarea name="message" class="name" placeholder="Type Message Here" rows="3" required></textarea><br>
		</div>
		<div>
			<center><div id="button">
			<input type="submit" name ="submit" id="button" value="SEND">
			</div></center>
		</div>
		</form>
	</div>
<br>
<br><br>
</div>	

</div>
</div>

<script>
	function sub()
	{	var x = 0;		
		var x = document.getElementById("password").value;
		
		if(x == 0)
		{
			alert("Please provide an email");
			return false;
		}
		else 
		{
			alert("Message successfully sent");
			return true ;
		}
		
	}
</script>








</body>

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