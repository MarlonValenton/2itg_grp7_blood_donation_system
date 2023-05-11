<?php
	include('connection.php');

	// function check_input($data){
	// 	$data = chop($data);
	// 	$data = trim($data);
	// 	return $data;
	// }

	

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$type = $_POST['type'];

	$fileInfo = PATHINFO($_FILES["photo"]["name"]);
	
	if (empty($_FILES["photo"]["name"])){
		$location="";
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $newFilename);
			$location = "upload/" . $newFilename;
		}
		else{
			$location="";
			?>
				<script>
					window.alert('Photo not added. Please upload JPG or PNG photo only!');
				</script>
			<?php
		}
	}

	
	$insert = $connection->query("insert into member(name,username,password,email, phone, address, usertype, profile) values ('$fullname','$username','$password','$email', '$phone', '$address', '$type', '$location')");
	
	if($insert){
		header('location:member_register.php');
	}
?>