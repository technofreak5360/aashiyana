<?php

session_start();


$con = mysqli_connect('localhost','root','yadav@1153');

mysqli_select_db($con, 'signup');

$firstname = filter_input(INPUT_POST,'firstname');

$password = filter_input(INPUT_POST,'password');


$s = " select * from regis where password  = '$password' && firstname = '$firstname'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 0){

	header('location:signin2.php');
}else{
		$_SESSION['firstname'] = $firstname;
	header('location:sogo.php');
}

?>