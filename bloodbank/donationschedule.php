<?php 

include 'Calendar.php';
$calendar = new Calendar('2023-05-12');
$calendar->add_event('Donation', '2023-05-03', 1, 'green');
$calendar->add_event('Doctors', '2023-05-04', 1, 'red');
$calendar->add_event('Transfusion', '2023-05-16', 7);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Event Calendar</title>
		<link href="donation.css" rel="stylesheet" type="text/css">
		<link href="calendar.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	    <nav class="navtop">
	    	<div>
	    		<h1>Event Calendar</h1>
	    	</div>
	    </nav>
		<div class="content home">
			<?=$calendar?>
		</div>
	</body>
</html>
