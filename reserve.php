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
<header style="position:relative;" >
<nav>
<div> 
<ul data-aos="fade-left"  > 
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
<h1>Reserve Now</h1>
</header>
<table  align="center">
<tr>
<th style="width:53%; padding-top:10%; padding-bottom:10%; padding-left:10%;">
<form  style="padding-bottom:30%; border:2px lightblue solid;" action="reser.php" method="post" onsubmit="return validation()">
<span id="messa" style="color:red;"></span>
<input  class="input"type="text" Placeholder="Name" id="usera" name="name" required> &nbsp  &nbsp
<input  class="input" type="text" Placeholder="Phone" id="phono" name="phone" maxlength="10" required><br><br><br>
<input  class="inpute" type="email" Placeholder="Email" id="emailx" name="email" required><br><br><br>
<input  class="input" type="text" Placeholder="CheckIn" id="txtFrom" name="checkin"   required>  &nbsp  &nbsp
<input  class="input" type="text" Placeholder="Checkout" id="txtTo" name="checkout" required><br><br><br>
<select class="input" name="people" id="peoplex" required >
 
  <!-- <option style="color:grey; font-size:20px; padding-left:20px;" disabled selected>People</option> -->
  <option>1</option>
  <option>2</option>
  <option>3</option>
</select>&nbsp  &nbsp
<select class="input" id="roomx" name="roomtype" required >
 
  <!-- <option style="color:grey; font-size:20px; padding-left:20px;" disabled selected>RoomType</option> -->
  <option>Single</option>
  <option>Double</option>
  <option>Presidential Room</option>
</select><br><br><br>
<input type="submit" value="Reserve Now">
</form>
</th><th width="60%" height="300px"><p  data-aos="fade-up" id="add"><span style="color:grey; font-size:20px; padding-right:35%;">ADDRESS:</span><br><br>
98 West 21th Street, Suite 721 New York NY 10016<br><br>

<span style="color:grey; font-size:20px;  padding-right:35%;">PHONE:</span><br><br>
(+91) 1111 222222<br><br>

<span style="color:grey; font-size:20px;  padding-right:35%;">Email:</span><br><br>
info@yourdomain.com</P></th>
</tr>


</table>
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
<script type="text/javascript">
function validation()
{
	var user = document.getElementById('usera').value;
	var phone = document.getElementById('phono').value;
		var emails = document.getElementById('emailx').value;
			var peoples = document.getElementById('peoplex').value;
				var rooms = document.getElementById('roomx').value;
	if((user.length <=2) || (user.length > 20) )
	{
	 alert( "** Name length is Short");
	 return false;
	}
 else if (!/^[a-zA-Z]*$/g.test(user)) {
        alert("Invalid name");

        return false;
    }

	else if((phone.length > 10) || (phone.length < 10 ))
	{
	alert( "** only 10 digits phone Number Allowed");
	 return false;
	}
	else if(isNaN(phone))
	{
	alert("** phone number is Invalid");
	 return false;
	}
	else if(emails.indexof('@')<=0)
	{
		alert("** @ at Invalid Position ");
	 return false;
	}
	else if(emails.charAt(emails.length=4)!='.' && (emails.charAt(emails.length-3)!='.' ))
	{
		alert("** . at Invalid Position ");
	 return false;
	}
	else if(peoples == "")
	{
		alert("** select no. of peoples");
	 return false;
	}
	else if(rooms == "")
	{
		alert("** select Roomtype");
	 return false;
	}
}
</script>

</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
        type="text/javascript"></script>
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css"
        rel="Stylesheet" type="text/css" />
    
 <script type="text/javascript">
        $(function () {
            $("[id*=txtFrom]").datepicker({
                minDate: new Date(),
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);
                    $("[id*=txtTo]").datepicker("option", "minDate", dt);
                }
            });
            $("[id*=txtTo]").datepicker({
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    $("[id*=txtFrom]").datepicker("option", "maxDate", dt);
                }
            });
        });
    </script>
	
</html>