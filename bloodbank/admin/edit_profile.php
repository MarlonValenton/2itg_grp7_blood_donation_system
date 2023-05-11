<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	include('connection.php');

	$id = $_GET['profile_id'];

	$name = $_POST['name'];
	$uname = $_POST['uname'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	

	$update = $connection->query("UPDATE member SET name='$name', username='$uname', password='$password', email='$email', phone='$phone' WHERE member_id='$id'");
	
	header('location:home.php');
?>

