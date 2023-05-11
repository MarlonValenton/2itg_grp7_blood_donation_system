<?php
	include('connection.php');
	session_start();

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$insert = $connection->query("INSERT INTO member(name, username, password, email, usertype) VALUES('$fullname', '$username', '$password', '$password', 'user')");
	if($insert){
		$_SESSION['success'] = '';
		header('location:index.php');
	}else { ?>
	<div class="alert alert-success" style="background-color: red; color: white;">
    <strong>ERROR!</strong> This alert box could indicate a successful or positive action.
  </div>
	 <?php }
?>