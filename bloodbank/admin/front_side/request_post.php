<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	include('template/header.php');
	include('connection.php');
?>
<br><br>
<div class="container pull-right">
   
	<div class="col-lg-8 well ">
	 <h3 class="title-txt">Request Post</h3>
	<div class="row">
				<form action="add_request_post.php" method="post" enctype="multipart/form-data">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Patient Name</label>
								<input type="text" name="pateintname" placeholder="Enter Patient Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Gender</label>
								<select  class="form-control" name="gender">
								<option value="">Select</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="other">Other</option>
								</select>
							</div>
						</div>					
							
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Blood Group</label>
								<select  class="form-control" name="bloodgroup">
								<option> Select </option>
								<?php
								$select = $connection->query("SELECT * FROM blood_group");
								while ($row=$select->fetch_array()) { ?>
								<option value="<?php echo $row['blood_id']?>"><?php echo $row['blood_group']?></option>
								 <?php }
								?>
									
								</select>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Unit Of Blood</label>
								<input type="text" name="unit" placeholder="Enter Unit Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Date</label>
								<input type="text" name="date" placeholder="Enter Date Here.." class="form-control">
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Hospital Name</label>
								<input type="text" name="hospital" placeholder="Enter Hospital Here.." class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Contact</label>
								<input type="text" name="contact" placeholder="Enter Contact Name Here.." class="form-control">
							</div>	
						</div>						
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" placeholder="Enter Email Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label>Contact Number</label>
						<input type="text" name="contactnumber" placeholder="Enter Email Address Here.." class="form-control">
					</div>	
					<div class="form-group">
						<label>Adress</label>
						<textarea type="text" name="address" placeholder="Enter Address Here.." class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Reason</label>
						<textarea type="text" name="reason" placeholder="Enter Reason Here.." class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" class="form-control">
					</div>
					<button type="submit" class="btn btn-info">Post</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>