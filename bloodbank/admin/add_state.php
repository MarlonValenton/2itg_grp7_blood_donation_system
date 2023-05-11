<?php
	include('connection.php');

	$code = $_POST['code'];
	$state = $_POST['state'];
	$description = $_POST['description'];

	$insert = $connection->query("INSERT INTO state(state_code, state_name, description) VALUES('$code', '$state', '$description')");
	$lastid = $connection->last_id;
	
	if($insert == TRUE) {
		header('location:state.php');
	}
?>