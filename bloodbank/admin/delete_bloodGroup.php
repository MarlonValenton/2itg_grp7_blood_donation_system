<?php
	include('connection.php');

	$id = $_GET['blood_id'];

	$delete = $connection->query("DELETE FROM blood_group WHERE blood_id='$id'");
	header('location:blood_group.php');
?>