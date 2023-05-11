<?php
	$connection = new mysqli('localhost', 'root', '', 'blood_bank');
	if($connection) {
		echo "";
	}else {
		echo "error";
	}
?>