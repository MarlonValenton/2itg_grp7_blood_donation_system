<?php
	include('connection.php');
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = $connection->query("SELECT * FROM member WHERE username='$username' AND password='$password'");

	$fetch = $login->fetch_array();
	if($login->num_rows == 1){
		if($fetch['usertype'] == 'admin'){
			$_SESSION['member_id'] = $fetch['member_id'];
			$_SESSION['username'] = $fetch['username'];
			header('location:admin_dasboard/admin_dashboard.php');

		}elseif ($fetch['usertype'] == 'user')  {
			$_SESSION['userid'] = $fetch['user_id'];
			$_SESSION['membername'] = $fetch['username'];
			header('location:user_dashboard/user_dashboard.php');
		}
	}else {
		$_SESSION['error'] = '';
	}
?>