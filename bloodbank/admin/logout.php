<?php
	include('connection.php');
	session_start();
	session_unset($_SESSION['member_id']);
	session_unset($_SESSION['name']);
	header('location:index.php');
?>