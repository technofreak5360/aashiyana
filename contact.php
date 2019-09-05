<?php
 session_start();
 if(!isset($_SESSION['firstname'])){
 header('location:signin.php');
 }
?>


<html>
<head>
<style media="screen">
header 
{
	background: url('bg3.jpg');
	background-color: rgba(0,0,0,0.5);
	background-size:cover; 
	background-position:center;
	height:100vh;
  	   
}
body{ margin:0;
	padding: 0;
	font-family: Arial;
	}
	  #comment_content
	  {
		  width:500px;
	  }
	  #comment_name
	  {
		  width:400px;
	  }
	  .cmm
	  {
	  padding-left:15%;
	  padding-top:5%;
	  }
	  
    </style>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="stylex.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
<h2 style="padding-top:55px;
	margin-left:30px;
	color:#fff;
	font-weight:bold;
	font-size:50px;">Hotel Aashiyana</h2>
<h1 style="font-size:70px;
	font-family:times;
	text-transform:uppercase;
	letter-spacing: 0px;
	font-weight:bold;
	text-align:center;
	padding-top:240px;
	color:#fff;"
	<h1>Contact</h1>
</header>
<table style=" background-color:#ebf8fd;align:center;width:100%">
<tr>
<th style="width:55%; padding-top:10%; padding-bottom:10%; padding-left:5%;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109740.86108784034!2d76.69348820329914!3d30.735210199731238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1554094094365!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</th><th style=" padding-top:10%; width:60%; height:300px;"><p id="add"><span style="color:grey; font-size:20px; padding-right:35%;">ADDRESS:</span><br><br>
98 West 21th Street, Suite 721 New York NY 10016<br><br>

<span style="color:grey; font-size:20px;  padding-right:35%;">PHONE:</span><br><br>
(+91) 1111 222222<br><br>

<span style="color:grey; font-size:20px;  padding-right:35%;">Email:</span><br><br>
info@yourdomain.com</P></th>
</tr>
</table>
<h6 style="font-size:20px; padding-left:10%;"> Comment Here..</h6>
<div class="com">
<form class="cmm" method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="7" cols="80"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
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
<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
