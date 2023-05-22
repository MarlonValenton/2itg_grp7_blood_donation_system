<?php 
require 'file/connection.php'; 
session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  else {
    $hid = $_SESSION['hid'];
    $sql = "select bloodrequest.*, receivers.* from bloodrequest, receivers where hid='$hid' && bloodrequest.rid=receivers.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Blood Requests"; ?>
<?php require 'head.php'; ?>
<body>
	<?php require 'header.php'; ?>
	<div class="container cont">

		<?php require 'message.php'; ?>

	<table class="table table-responsive table-striped rounded mb-5">
		<tr class="tableBloodSamp"><th colspan="9" class="title tableBloodSamp">Blood requests</th></tr>
		<tr class="tableBloodSamp">
			<th class="tableBloodSamp">#</th>
			<th class="tableBloodSamp">Name</th>
			<th class="tableBloodSamp">Email</th>
			<th class="tableBloodSamp">City</th>
			<th class="tableBloodSamp">Phone</th>
			<th class="tableBloodSamp">Blood Group</th>
			<th class="tableBloodSamp">Status</th>
			<th class="tableBloodSamp" colspan="2">Action</th>
		</tr>

		    <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">No one has requested yet. </b>';
            }
            ?>
            </div>

		<?php while($row = mysqli_fetch_array($result)) { ?>

		<tr class="tableBloodSamp">
			<td class="tableBloodSamp"><?php echo ++$counter;?></td>
			<td class="tableBloodSamp"><?php echo $row['rname'];?></td>
			<td class="tableBloodSamp"><?php echo $row['remail'];?></td>
			<td class="tableBloodSamp"><?php echo $row['rcity'];?></td>
			<td class="tableBloodSamp"><?php echo $row['rphone'];?></td>
			<td class="tableBloodSamp"><?php echo $row['bg'];?></td>
			<td class="tableBloodSamp"><?php echo 'You have '.$row['status'];?></td>
			<td class="tableBloodSamp"><?php if($row['status'] == 'Accepted'){ ?> <a href="" class="btn btn-success disabled">Accepted</a> <?php }
			else{ ?>
				<a href="file/accept.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-success">Accept</a>
			<?php } ?>
			</td>
			<td class="tableBloodSamp"><?php if($row['status'] == 'Rejected'){ ?> <a href="" class="btn btn-danger disabled">Rejected</a> <?php }
			else{ ?>
				<a href="file/reject.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-danger">Reject</a>
			<?php } ?>
			</td>
			
		</tr>
		<?php } ?>
	</table>
</div>
</body>
</html>
<?php } ?>