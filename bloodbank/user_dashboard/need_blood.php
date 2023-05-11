<?php
	include('../connection.php');
	session_start();

	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$group = $_POST['group'];
	$unit = $_POST['unit'];
	$hospital = $_POST['hospital'];
	$datepicker = $_POST['datepicker'];
	$contactperson = $_POST['contactperson'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$reason = $_POST['reason'];
	$member = $_POST['member'];


	$fileInfo = PATHINFO($_FILES["photo"]["name"]);
	
	if (empty($_FILES["photo"]["name"])){
		$location="";
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["photo"]["tmp_name"], "../upload/" . $newFilename);
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

// echo "<pre>";
// 	print_r($_POST);
// 	exit();

	$insert = $connection->query("INSERT INTO requester(`patient_name`,`gender`,`blood_group`,`unit_blood`,`hospital_name`,`date`,`contact_person`,`address`,`email`,`contact_no`,`reason`,`member_fk`,`image`) VALUES ('$name', '$gender', '$group', '$unit', '$hospital', '$datepicker', '$contactperson', '$address', '$email', '$contact', '$reason', '".$_SESSION['membername']."', '$location')");
	// $r = "INSERT INTO donor(name, father_name, gender, dob, body_weight, email, state, city, address, pincode, phone, image, username_fk) VALUES ('$name', '$fathername', '$gender', '$datepicker', '$weight', '$email', '$state', '$city', '$pincode', '$phone', '$address', '$location',)";
	// echo $r;
	// exit();
	
	if($insert){
		header('location:request.php');
	}else {
		header('location:request.php');
	}
?>