<?php
$Name = filter_input(INPUT_POST,'name');
$Phone = filter_input(INPUT_POST,'phone');
$Email = filter_input(INPUT_POST,'email');
$Checkin = filter_input(INPUT_POST,'checkin');
$Checkout = filter_input(INPUT_POST,'checkout');
$People = filter_input(INPUT_POST,'people');
$Roomtype = filter_input(INPUT_POST,'roomtype');
if(!empty($Name)|| !empty($Phone)||!empty($Email) || !empty($Checkin) || !empty($Checkout) || !empty($People) || !empty($Roomtype) )
{
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "yadav@1153";
	$dbname = "booking";
	
	$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	{
		die('connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
	}
	else
	{
		$sql = "INSERT INTO nbooking (name,email,phone,people,room,checkin,checkout)
		values ('$Name','$Email',$Phone,$People,'$Roomtype','$Checkin','$Checkout')";
		
		
		if($conn->query($sql)){
			
		echo "booked sucessfully";
		}
		else
		{
			echo "Error: ".$sql."<br>". $conn->error;
		}
		$conn->close();
	}
	
}
else{
	echo "All Fields Are Required";
}
?>