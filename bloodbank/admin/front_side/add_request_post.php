<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	include('connection.php');

	$patient = $_POST['pateintname'];
	$gender = $_POST['gender'];
	$bloodgroup = $_POST['bloodgroup'];
	$unit = $_POST['unit'];
	$date = $_POST['date'];
	$hospital = $_POST['hospital'];
	$email = $_POST['email'];
	$contactnumber = $_POST['contactnumber'];
	$address = $_POST['address'];
	$reason = $_POST['reason'];

	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	
	if (empty($_FILES["image"]["name"])){
		$location="";
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $newFilename);
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
	
	

	$insert = $connection->query("INSERT INTO requester(patient_name, gender, blood_group, unit_blood, hospital_name, date, contact_person, address, email, contact_no, reason, image) VALUES ('$patient', '$gender', '$bloodgroup', '$unit', '$hospital', '$date', '$hospital', '$email', '$contactnumber', '$address', '$reason', '$location')");
	
	// $r = "INSERT INTO requester(patient_name, gender, blood_group, unit_blood, hospital_name, date, contact_person, address, email, contact_no, reason) VALUES ('$patient', '$gender', '$bloodgroup', '$unit', '$hospital', '$date', '$hospital', '$email', '$contactnumber', '$address', '$reason')";
	// echo $r;
	// exit();
	if($insert) {
		header('location:request_post.php');
	}else { ?>
	<script type="text/javascript">
		alert('error');
		window.location = "request_post.php";
	</script>
	<?php }
?>