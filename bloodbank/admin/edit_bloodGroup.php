<?php
	include('connection.php');

	$id = $_GET['blood_id'];

	$bname = $_POST['bname'];
	$update = $connection->query("UPDATE blood_group SET blood_group='$bname' WHERE blood_id='$id'");
	header('location:blood_group.php');
?>