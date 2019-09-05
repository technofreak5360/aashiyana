<html>
<head>
<link href="login.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

</head>
<body>

<div class="signup">
<form action="register.php" method="POST">
<div style="color:red;text-align:center;">
<h4 > 
Invalid Name <br><span style="color:yellow;">Renter Correct Name !!!</span> </h4> </div> 
<h2 style="color: #fff;">Sign Up</h2>

<input type="text" name="firstname" placeholder="First name" required><br><br>
<input type="text" name="lastname" placeholder="Last name" required><br><br>
<input type="password" name="password" placeholder="Password" required><br><br>
<input type="text" name="email" placeholder="Email address" required><br><br>
<input type="submit"  value="Sign up" onsubmit="myfunction()"> <br><br>
 Back to login!! <a href="signin.php">Login</a>


</form>
</div>
</body>
</html>