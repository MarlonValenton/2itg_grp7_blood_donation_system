<?php
	include('connection.php');
	$id = $_GET['city_id'];

	$code = $_POST['city_code'];
	$sname = $_POST['state_name'];
	$city = $_POST['city_name'];
	

	$update = $connection->query("UPDATE city SET city_code = '$code', city_name='$city', state_name = '$sname'  WHERE city_id='$id'");
	if($update){
		header('location:city.php');
	}
?>