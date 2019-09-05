<html>
<head>
<link href="login.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

</head>
<body onload='document.form1.text1.focus()'> 
<div class="signup">
<form action="register.php" method="POST">
<h2 style="color: #fff;">Sign Up</h2>
<input type="text" name="firstname" placeholder="First name" required><br><br>
<input type="text" name="lastname" placeholder="Last name" required><br><br>
<input type="password" name="password" placeholder="Password" required><br><br>
<input type="text" name="email"  placeholder="Email address" required><br><br>
<input type="submit"  value="Sign up" onclick="validateEmail(this);" > <br><br><br>
 Back to login!! <a href="signin.php">Login</a>
<div id="msg"> Congratulations you sign up successfully!!!</div>

</form>
</div>
</body>
</html>