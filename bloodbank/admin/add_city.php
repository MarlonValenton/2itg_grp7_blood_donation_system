<?php
	include('connection.php');

	$code = $_POST['code'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$description = $_POST['description'];
	

	$insert = $connection->query("INSERT INTO city(city_code, state_fk, city_name, description) VALUES('$code', '$state', '$city', '$description')");
	if($insert == TRUE) {
		header('location:city.php');
	}
?>