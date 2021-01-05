<!DOCTYPE html>
<html>
<head>

   	
$con -> close();
?>
	<style type="text/css">
	<title>eCinema</title>
	</style>
<link rel="stylesheet" type="text/css"href="style.css">
</head>

<body>
<center>
		<img src="images/logo 2.png" class="logo">
		</center>

		<ul class="menu">
		
			<li><a href="Home.php">HOME</a></li>
			<li><a href="Movies.php">MOVIES</a></li>
			<li><a href="theater.php">THEATERS</a></li>
			<li><a href="tickets.php">BOOK TICKETS</a></li>
			<li><a href="registration.php">REGISTER</a></li>
			<li><a href="begin.php">LOG IN</a></li>
			<li><a href="contactUs.php">CONTACT US</a></li>
			<li class="active"><a href="userAcc.php">USER ACCOUNT</a></li>
			
		</ul>
		<br/>
		
		<hr>
		<br/><br/><br/>
 
<div class="doc">
<h2>User Account</h2>
<br>
<br>
<br>

<h3>User Details</h3>
<br>
<br>


<div class ="image">
<img src ="images/user.png" height="100px" width="100px"></n><br/>
<center><div id ="button">
		<input type ="submit" value ="Log Out" id = "button"></div></center>
</div>
<?php
$con = new mysqli("localhost","root","","userdb");
if($con->connect_error){
	die("connection unsuccesful");
}

/*
$sql = "SELECT id,first_Name,last_Name,gender,dOB,email,telephone from users";

$result = $con->query($sql);
if($result->num_rows >0){
	
	while($row = $result->fetch_assoc()){
		if($row["id"] == 14){
		echo "User ID:-".$row["id"];
		echo "<br><br>Name :-".$row["first_Name"];
		echo "<br><br>Registration Date:-".$row["dOB"];
		
	
*/

echo"<br><br>";
echo"Email:-".$row["$x"];
echo"<br><br>";
echo"Mobile:-".$row["$y"];
echo"<br><br><br>";
		/*}
	}
}*/
?>
<h3>Recent Bookings</h3>
<br>
<br>


Date:-
<br><br>
Movie:-
<br><br><br>

<h3>Recent Payments</h3>
<br>
<br>


Total Amount:-
<br><br>
Discounts:-
<br><br>
Net Amount:-
<br><br>
Payment Method:-
<br><br>
Paid Amount:-
<br><br>
Balance:-
<br><br><br>

</div>	

</div>
</div>


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