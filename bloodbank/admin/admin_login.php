<?php
	
	include('connection.php');

	$username =$_POST['username'];
	$password = $_POST['password'];

	$login = $connection->query("SELECT * FROM member WHERE username='$username' AND password = '$password' AND usertype='admin'");
	$fetch = $login->fetch_array();
	$row = $login->num_rows;
	if($row == 1) {
		session_start();
		$_SESSION['member_id'] = $fetch['member_id'];
		$_SESSION['name'] = $fetch['name']; 
		header('location:home.php');
 }else { ?>
		<script type="text/javascript">
			alert('Wrong Username Or Password');
			window.location='index.php';
		</script>	
<?php	}
?>