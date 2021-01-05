
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
<title>Buy tickets</title>
<link rel="stylesheet" href="style.css">
<!-- <script src="js/ticketScript.js"> -->
<!-- </script> -->
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
			<li class="active"><a href="tickets.php">BOOK TICKETS</a></li>
			<li><a href="registration.php">REGISTER</a></li>
			<li><a href="begin.php">LOG IN</a></li>
			<li><a href="contactUs.php">CONTACT US</a></li>
			
		</ul>
		<br/>
		
		<hr>
		<br/><br/><br/>

	<center>

	<div class="form-tickets">
	<form method="post"  action ="ticket.php"  onsubmit="display()">
	<h1>Book your movie here...</h1>
		Select movie:<br>
		<select name="movie" id="smovies">
			<option value="">Choose</option> 
			<option value="annabelle">Annabelle Comes Home</option>
			<option value="alladin">Alladin</option>
			<option value="slPets2">Secret Life of Pets 2</option>
			<option value="spiderman">Spider-Man Far From Home</option>
			<option value="lionking">Lion King</option>
			<option value="crawl">CRAWL</option>
		</select>
	<br><br>
		Select theatre:<br>
			<select name="theatre" id="Stheatre">
				<option value="">Choose</option>
				<option value="ScopeCCC">Scope cinema|ccc</option>
				<option value="RC">Reagal cinema</option>
				<option value="LS">Liberty by scope</option>
				<option value="MC">Majestic cineplex</option>
				<option value="SC">Savoy 3D Cinema</option>
			</select>
	<br><br>
		Enter number of tickets:<br>
		<input type="text" name="ntickets" id= "ticketnum">
	<br><br>
		Select payment method:<br>
			<select name="payMethod">
				<option value="cash">Cash</option>
				<option value="card">Card</option>

			</select>
	
	<br><br>

	<input type="submit" id="submitbtn" value="Submit" name ="submit" onclick="calculate()">
	</form>

	</div>
	
	</center>
	
	<script>
	
	function calculate(){
	var ticket=document.getElementById("ticketnum").value;
	
	var tbill= ticket * "750";
	alert("Your bill is Rs."+tbill);
	}
	</script>
</body>

<br/><br/><br/><br/>
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