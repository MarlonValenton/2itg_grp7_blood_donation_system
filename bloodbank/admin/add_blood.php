<?php
	include('connection.php');

	$bname = $_POST['bname'];

	$insert = $connection->query("INSERT INTO blood_group(blood_group) VALUES ('$bname')");
	header('location:blood_group.php');
?>