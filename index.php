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
<ul  data-aos="fade-right" > 
<li><a class="cool-link" href="index.php">Home</a></li>
<li><a class="cool-link" href="Rooms.php">Rooms</a></li>
<li><a class="cool-link" href="contact.php">Contact</a></li>
<li><a class="cool-link" href="reserve.php">Resevation</a></li>
<li ><a style = "color:yellow;font-size:20px; font-weight:bold "href="logout.php">Logout </a> </li> 
<li  style = "color:yellow;font-size:20px; font-weight:bold;"><?php echo $_SESSION['firstname'];?></li>
</ul>
</div>
</nav>
<h2>Hotel Aashiyana</h2>
<h1 >A Best Place To Stay</h1>
</header>
<section class="sec1">
<table cellspacing="40px" bgcolor="#ebf8fd">
<tr>
<th data-aos="fade-up" style="width:580px;height:400px;"><p><span style="text-align:center;font-family:times;font-size:50px;">Welcome!</span><br><br>Far far away, behind the word mountains, far<br> from the countries Vokalia and Consonantia,<br> there live the blind texts. Separated they live in<br> Bookmarksgrove right at the coast of the<br> Semantics, a large language ocean.</p></th>
<th><img id="pic1" src="./images/img_1.jpg"></th>
</tr>
</table>
</section>
<table cellspacing="40px" align="center" >
<h2 data-aos="fade-up" class="rooms"> Rooms & Suites</h2>
<tr>
<th width="300px" height="200px"><img class="pic2" src="./images/img_1.jpg"></th>
<th  width="300px" height="200px"><img class="pic3" src="./images/img_2.jpg"></th>
<th  width="300px" height="200px"><img class="pic3" src="./images/img_3.jpg"></th>
</tr>
<tr><th data-aos="flip-right">Single Room<br><br><span class="rate">Rs.1100 / Per Night</span></th><th data-aos="flip-right">Family Room<br><br><span class="rate">Rs.1100 / Per Night</span></th><th data-aos="flip-right">Presidential Room<br><br><span class="rate">Rs.1100 / Per Night</span></th></tr>
</table>
<div class="photos">
	<h2 class="rooms" data-aos="fade-up">Photos</h2>

<img class="nature" src="./images/staff.jpg" width="100%">
<img class="nature" src="./miages/slider-6.jpg" width="100%">
<img class="nature" src="./miages/slider-7.jpg" width="100%">
<img class="nature" src="./miages/gym.jpg" width="100%">
<img class="nature" src="./miages/restra.jpg" width="100%">
<img class="nature" src="./miages/pool.jpg" width="100%">
<img class="nature" src="./miages/spa2.jpg" width="100%">


<script>
w3.slideshow(".nature", 3000);
</script>
</div>
<div class="review">
<table align="center"  cellspacing="30px" ><tr><h2  data-aos="fade-up" class="rooms"> People Says</h2><th width="300px"height="100px"><img class="person"src="person_1.jpg"></th><th  width="300px"height="100px"><img class="person"src="person_2.jpg"></th><th width="300px"height="70px"><img class="person" src="person_3.jpg"></th></tr>

<tr><th  width="300px"><p data-aos="flip-left" class="rev">“A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.”</p></th><th  width="300px"><p data-aos="flip-left" class="rev">“Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.”</p></th><th width="300px"height="200px"><p data-aos="flip-left" class="rev">“Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.”</p></th></tr>
</table>
</div>
<div class="section-1 box">
<h2  data-aos="fade-up">A Best Place to stay! Reserve Now</h2>
 
</div>
<div class="section-2 box">
<div>
<h3  data-aos="fade-up" class="footer"> Hotel Aashiyana</h3>
<p  data-aos="fade-up" id="footer">INRO@YOURSSITE.com </p>

<i class="fab fa-twitter"></i>
<i class="fab fa-facebook-f"></i>
<i class="fab fa-youtube"></i>
<i class="fab fa-instagram"></i>

<p  data-aos="fade-up" id="footer2" style="margin-bottom:20px;">Copyright ©2019 All rights reserved | This t is made with ❤ Sogo Hotel </p>
</div>

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