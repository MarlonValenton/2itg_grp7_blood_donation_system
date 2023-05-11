<?php
	include('connection.php');
	session_start();
	session_unset($_SESSION['username']);
	session_unset($_SESSION['member_id']);
	header('location:index.php');
	?>