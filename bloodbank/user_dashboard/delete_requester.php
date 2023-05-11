<?php
	include('../connection.php');

	$id = $_GET['requester_id'];

	$delete = $connection->query("DELETE FROM requester WHERE requester_id='$id'");
	header('location:request.php');
?>