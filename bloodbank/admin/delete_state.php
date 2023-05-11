<?php
	include('connection.php');
	$id = $_GET['state_id'];

	$delete = $connection->query("DELETE FROM state WHERE state_id = $id");
	// $d = "DELETE FROM state WHERE state_id= $id";
	// echo $d;
	// exit();
	if($delete){
		header('location:state.php');
	}
?>


