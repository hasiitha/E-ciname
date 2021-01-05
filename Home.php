<!DOCTYPE>
<html>
	<head>
		<title>E-Cinema(home)</title>
		<link rel="StyleSheet" type="text/css" href="style.css">
		<script src="js/homeScript.js" ></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: black;
  font-size: 16px;
  padding: 8px 12px;
  position: relative;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>



	</head>
	
	
	<body>
		<center>
		<img src="images/logo 2.png" class="logo">
		</center>
		<div id="registration"><a href="userAcc.html"><img src="images/Login-1.png" height="90px" width="100px"><h3>User Account</h3></a></div> 

		<ul class="menu">
		
			<li class="active"><a href="Home.php">HOME</a></li>
			<li><a href="Movies.php">MOVIES</a></li>
			<li><a href="theater.php">THEATERS</a></li>
			<li><a href="tickets.php">BOOK TICKETS</a></li>
			<li><a href="registration.php">REGISTER</a></li>
			<li><a href="begin.php">LOG IN</a></li>
			<li><a href="contactUs.php">CONTACT US</a></li>

		</ul>
		<br/>
		
		<hr>
		<label><i><h2><marquee direction="right" scrollamount=15>Book Your Favourite Movies,
		At Your Favourite Theaters...</marquee></h2></i></label>
		<br/>

		<br/><br/>
		<center>
		<h3>E-Cinema,Movie booking system helps you to book your favourite movie at any desired theater in the area.<br/>
			Not only that,You can check news,information about upcoming movies thorough E-Cinema.
		</h3>
		</center>
		<br/><br/>
		<br/><br/>


		<h2 style="text-align:center">NOW SHOWING MOVIES</h2>

		<br/><br/>
		<br/><br/>

    <center>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/movie1.jpg" style="width:1000px; height: 600px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/movie2.jpg" style="width:1000px; height: 600px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/movie3.jpg" style="width:1000px; height: 600px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/movie4.jpg" style="width:1000px; height: 600px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/movie5.jpg" style="width:1000px; height: 600px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/movie6.jpg" style="width:1000px; height: 600px;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

</center>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/movie1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Annabelle">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/movie2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Aladdin">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/movie3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Secret lifes of pet">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/movie4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Spider Man">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/movie5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Lion King ">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/movie6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Crawl">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");

  if (n > slides.length) {
  	slideIndex = 1
  }

  if (n < 1) {
  	slideIndex = slides.length
  }

  for (i = 0; i < slides.length; i++) 
  {
      slides[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++)
   {
      dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    


<br>
<br><br><br><br><br><br>

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