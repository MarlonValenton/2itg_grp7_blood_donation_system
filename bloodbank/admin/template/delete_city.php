<?php
	include('connection.php');

	$id = $_GET['city_id'];

	$delete = $connection->query("DELETE FROM city WHERE city_id='$id'");

	if($delete){
		header('location:city.php');
	}
?>