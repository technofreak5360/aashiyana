 <?php
 session_start();
 if(!isset($_SESSION['firstname'])){
 header('location:signin.php');
 }
?>
<html>
<head>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="stylex.css">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
<body>
<header>
<nav>
<div> 
<ul data-aos="fade-left" > 
<li><a class="cool-link" href="index.php">Home</a></li>
<li><a class="cool-link" href="Rooms.php">Rooms</a></li>
<li><a class="cool-link" href="contact.php">Contact</a></li>
<li><a class="cool-link" href="reserve.php">Reservation</a></li>
<li ><a style = "color:yellow;font-size:20px; font-weight:bold "href="logout.php">Logout </a> </li> 
<li  style = "color:yellow;font-size:20px; font-weight:bold;"><?php echo $_SESSION['firstname'];?></li>
</ul>
</div>
</nav>
<h2>Hotel Aashiyana</h2>
<h1>Rooms</h1>
</header>
<table cellspacing="40px" align="center" >
<h2 data-aos="fade-up" class="rooms"> Rooms & Suites</h2>
<tr>
<th width="300px" height="200px"><a href="reserve.php"><img class="pic2" src="./images/img_1.jpg"></a></th>
<th  width="300px" height="200px"><a href="reserve.php"><img class="pic3" src="./imagesimg_2.jpg"></a></th>
<th  width="300px" height="200px"><a href="reserve.php"><img class="pic3" src="./images/img_3.jpg"></a></th>
</tr>
<tr><th data-aos="flip-right">Single Room<br><br><span class="rate">Rs.1100 / Per Night</span></th><th data-aos="flip-right">Family Room<br><br><span class="rate">Rs.1100 / Per Night</span></th><th data-aos="flip-right">Presidential Room<br><br><span class="rate">Rs.1100 / Per Night</span></th></tr>
<tr>
<th width="300px" height="200px"><a href="reserve.php"><img class="pic2" src="./images/img_1.jpg"></a></th>
<th  width="300px" height="200px"><a href="reserve.php"><img class="pic3" src="./images/img_2.jpg"></a></th>
<th  width="300px" height="200px"><a href="reserve.php"><img class="pic3" src="./images/img_3.jpg"></a></th>
</tr>
<tr><th data-aos="flip-right">Single Room<br><br><span class="rate">Rs.1100 / Per Night</span></th><th data-aos="flip-right">Family Room<br><br><span class="rate">Rs.1100 / Per Night</span></th><th data-aos="flip-right">Presidential Room<br><br><span class="rate">Rs.1100 / Per Night</span></th></tr>

</table>
<div class="offers"><br><br><h5 data-aos="fade-up" style="color:black; font-size:40px; text-align:center; font-family:times;"> Great Offers</h5>

<table cellspacing="0" align="center">
<tr style="margin-top:200px;"><th height="400" width="500"><img class="offer1" src="/images/img_1.jpg"></th><th  height="500" width="500" bgcolor="white"><h3 data-aos="fade-up" class="offer2">$199<span style="color:grey; font-size:15px;">/PER NIGHT</span></h3><h4 data-aos="fade-up" class="toffer1">Family Room</h4><p data-aos="fade-up" class="toffer"><br>Far far away, behind the word mountains, far from the countries 
Vokalia and Consonantia, there live the blind texts. Separated they 
live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p><button class="but"><a class="but1"  href="reserve.php">Book Now</a></button></th></tr>
<tr><th  height="500" width="500" bgcolor="white"><h3 data-aos="fade-up" class="offer2">$299<span style="color:grey; font-size:15px;">/PER NIGHT</span></h3><h4 data-aos="fade-up" class="toffer1">Presidential Room</h4><p data-aos="fade-up" class="toffer">Far far away, behind the word mountains, far from the countries 
Vokalia and Consonantia, there live the blind texts. Separated they 
live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p><button class="but"><a class="but1" href="reserve.php">Book Now</a></button></th><th height="400" width="500"><img class="offer1" src="img_2.jpg"></th></tr>

</table>
</div>
<div class="section-1 box">
<h2  data-aos="fade-up">A Best Place to stay! Reserve Now</h2>
 
</div>
<div class="section-2 box">
<h3 class="footer">Hotel Aashiyana</h3>
<p id="footer">INRO@YOURSSITE.com </p>
<ul>
<i class="fab fa-twitter"></i>
<i class="fab fa-facebook-f"></i>
<i class="fab fa-youtube"></i>
<i class="fab fa-instagram"></i>
</ul>
<p id="footer2" style="margin-bottom:20px;">Copyright ©2019 All rights reserved | This t is made with ❤ Sogo Hotel </p>
</div>
</body>
<script type="text/javascript">
	$(window).on("scroll",function(){
		if($(window).scrollTop()){
			$('nav').addClass('black');
		}
		
		else
		{
		$('nav').removeClass('black');
		}
	})
</script>
<script>
  AOS.init({
  duration:1500,
  });
</script>


</html>