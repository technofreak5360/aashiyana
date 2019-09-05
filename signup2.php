<html>
<head>
<link href="login.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

</head>
<body>

<div class="signup">
<form action="signup.php" method="POST">
<div style="color:DodgerBlue;text-align:center;">
<h4 > 
Congratulations you signup successfully <br><span style="color:yellow;">Please go back to Login!!!</span> </h4> </div> 
<h2 style="color: #fff;">Sign Up</h2>

<input type="text" name="firstname" placeholder="First name" required><br><br>
<input type="text" name="lastname" placeholder="Last name" required><br><br>
<input type="password" name="password" placeholder="Password" required><br><br>
<input type="text" name="email" placeholder="Email address" required><br><br>
<input type="submit"  value="Sign up" onsubmit="myfunction()"> <br><br>
 Back to login!! <a href="signin.php">Login</a>
<div id="msg"> Congratulations you sign up successfully!!!</div>
<script>
function myfunction()
{
var x=document.getElementById("msg");
x.className = "show";
setTimeout(function() { x.className = x.className.replace("show","");}, 3000);
}
</script>
</form>
</div>
</body>
</html>