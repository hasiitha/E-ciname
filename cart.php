<!DOCTYPE html>

<?php
    
    //connection =mysqli_connect(dbserver,dbuser,dbpass,dbname);
$con = mysqli_connect('localhost','root','','userdb');
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
	<title>Add Prody</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/addProduct.js"></script>
</head>
<body>

	 <nav>
		<ul class="menu">
			<li><a href="Home.php">HOME</a></li>
			<li><a href="Movies.php">MOVIES</a></li>
			<li><a href="theater.php">THEATERS</a></li>
			<li><a href="tickets.php">BOOK TICKETS</a></li>
			<li><a href="registration.php">REGISTER</a></li>
			<li class="active"><a href="begin.php">LOG IN</a></li>
			<li><a href="contactUs.php">CONTACT US</a></li>

		</ul>	
    </nav>    
	<center>
	<br><br><br>
		<div class="form-add">
		<center>	
			<h1><b>Adding movie</b> </h1>
		</center><br><br><br/>
		<hr/>

    <form class="formDesign" method="post" action="submitAddMovies.php" >
    	<div class="productName">
	    	<p style="color:#ed0c0c;display: inline-block;"></p><h3>Movie Name </h3>    	<input type="text"  name="movieName"  >
	    </div>
	    <div class="productName">
	    	<p style="color:#ed0c0c;display: inline-block;"></p><h3>Movieshowing Date</h3>    	<input type="date" name="movieDate"  >
	    </div>	
	    <br/><br/>
	    <!-- product description-->
	    <div class="productDescription">
	    	<h3>Movie Description </h3>  
	    	<textarea rows="10" cols="100" name="movieDescription"></textarea>
	    <!-- category-->
	    <div class="productName">
	    	<h3>Movie Category</h3>
	    	<p style="color:#ed0c0c;display: inline-block;"></p>   	<input type="text" name="movieCT" >
	    	
		</div> <br/>
	    
	    <!-- price -->
	    <div class="price">
	    	<p style="color:#ed0c0c;display: inline-block;"></p>
	    	<h3>Ticket Price</h3> 
	    	<input type="text" name="moviePrice"  pattern= "[0-9]{0,}+\.[0-9]{0,}">

	 	  </div> <br/>
	 	
	 	  <!-- product submisson-->

	 	  <div class="sbmt">
	 	  	<input type="submit" name="productSubmit" value="SUBMIT THE PRODUCT">
	 	  
	 	  </div>

	 	
	 </form>  
	</body>
</html>