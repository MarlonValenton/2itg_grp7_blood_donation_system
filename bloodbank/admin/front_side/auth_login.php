<?php
	include('connection.php');
	session_start();

	$username = $_POST['uname'];
	$password = $_POST['password'];

	$login = $connection->query("SELECT * FROM member WHERE username='$username' AND password='$password' AND usertype='user'");
	$fetch = $login->fetch_array();
	$num = $login->num_rows;

	if($num == 1){
		
		$_SESSION['member_id'] = $fetch['member_id'];
		$_SESSION['username'] = $fetch['username'];
		header('location:user_dashboard.php');
		
	}else { ?>
		<script type="text/javascript">
			alert('wrong username or password');
			window.location = "member_login.php";
		</script>
<?php 	}
?>