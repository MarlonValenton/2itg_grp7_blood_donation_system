<?php
// connect to database
$conn = mysqli_connect("localhost", "username", "password", "blood_donation_system");

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// initialize variables
$search_blood_type = "";

// if form is submitted
if (isset($_POST['search'])) {
  $search_blood_type = $_POST['search_blood_type'];
  
  // query database for donors with matching blood type
  $query = "SELECT * FROM donors WHERE blood_type='$search_blood_type'";
  $result = mysqli_query($conn, $query);
}
?>

