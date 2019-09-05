<?php

session_start();


$con = mysqli_connect('localhost','root','yadav@1153');

mysqli_select_db($con, 'signup');

$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$password = filter_input(INPUT_POST,'password');
$email = filter_input(INPUT_POST,'email');

$s = " select * from regis where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
 if ( !preg_match("/^[a-zA-Z'. -]+$/", $name) && !preg_match("/^[a-zA-Z'. -]+$/", $firstname)) 
{
	header('location:signup4.php');
}
else if ( !preg_match("/^[a-zA-Z'. -]+$/", $name) && !preg_match("/^[a-zA-Z'. -]+$/", $lastname)) 
{
	header('location:signup4.php');
}

else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email))
 {
	header('location:signup3.php');
}

else if ($num==1)
{
	header('location:signup5.php');
}
else{
	$reg = " insert into regis(firstname ,lastname ,password, email) values ('$firstname' , '$lastname', '$password','$email')";
	mysqli_query($con,$reg);
	echo" Registration Successful";
	header('location:signup2.php');
}

?>