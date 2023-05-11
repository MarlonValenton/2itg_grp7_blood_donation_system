<?php
	include('template/header.php');

?>

<div class="main" >
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Hello, <?php echo $_SESSION['name'];?></h3>
					<div class="row">
						<div class="col-md-6">
						<?php
						$select = $connection->query("SELECT MAX(city_id) AS city_id FROM city");
						$fetch = $select->fetch_array();
						$serial = $fetch['city_id'] + 1;
						?>
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Add City</h3>
								</div>
								<div class="panel-body">
								<form action="" id="form" method="" enctype="multipart/form-data" >
								<input class="form-control" name="serial" id="serial" value="<?php echo "BD 0" .  $serial;?>" type="text" disabled="">
									<br>
									<input class="form-control" name="code" id="code" placeholder="Code" type="text" required="">
									<br>
									<select class="form-control" id="state" name="state" placeholder="Description" type="text" required="">
										<option>Select</option>
										<?php 
											$state = $connection->query("SELECT * FROM state");
											while($row = $state->fetch_array()){
										?>
										<option value="<?php echo $row['state_id'];?>"><?php echo $row['state_name']?></option>
										<?php } ?>
									</select>
									<br>

									<input class="form-control" name="city" id="city" placeholder="city Name" type="text" required="">
									<br>
									<input class="form-control" id="description" name="description" placeholder="Description" type="text" required="">
									<br>
									<button type="button" class="btn btn-primary" id="addcity" onclick="insertCity()">Add State</button>
									<div id="result"></div>
									<p id="message"></p>
									</form>
								</div>


							</div>

							
						</div>
						<div class="col-md-6">
						
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Add State</h3>
								</div>
								<div class="panel-body">
								<table id="" class="table table-bordered">
									<thead>
											<tr>
												
												<th>Code</th>
												<th>State</th>
												<th>Name</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$select =$connection->query("SELECT city.city_id, city.city_code, city.city_name, state.state_name FROM city RIGHT JOIN state ON state.state_id = city.state_fk");
												while($fetch = $select->fetch_array()){ ?>
												<tr>
													<td><?php echo $fetch['city_code'];?></td>
													<td><?php echo $fetch['state_name'];?></td>
													<td><?php echo $fetch['city_name'];?></td>
													<td><a href="#delete<?php echo $fetch['city_id']; ?>" data-toggle="modal" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
													<a href="#edit<?php echo $fetch['city_id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a>
													</td>
													

												</tr>
												<!-- for delete modal in this case i have take the id from while loop and pass it to modal id -->
												<div class="modal fade" id="delete<?php echo $fetch['city_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog">
												<div class="modal-content">
												<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<center><h2 class="modal-title" id="myModalLabel">Are You Sure?</h2></center>
												</div>
												<div class="modal-body">
												<h3>Want To Delete This Recored?</h3>
												<div class="container-fluid">
												 
												</div> 
												</div>
												<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
												<a href="delete_city.php?city_id=<?php echo $fetch['city_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
												</div>

												</div>
												</div>
												</div>

												<!-- Update Modal -->
												<div class="modal fade" id="edit<?php echo $fetch['city_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog">
												<div class="modal-content">
												<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<center><h2 class="modal-title" id="myModalLabel">Are You Sure?</h2></center>
												</div>
												<div class="modal-body">
									
				
												
									<div class="container-fluid">
									<form action="edit_city.php?city_id=<?php echo $fetch['city_id']; ?>" method="post">		 
									<input class="form-control" name="city_code" id="city_code" type="text" value="<?php echo $fetch['city_code']?>">
									<br>
									<input class="form-control" name="state" id="state" type="text" value="<?php echo $fetch['city_name']?>">
									<br>
									<input class="form-control" name="state" id="state" type="text" value="<?php echo $fetch['city_name']?>">
									

												</div> 
												</div>
												<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
												<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</button>
												</div>
</form>	
												</div>
												</div>
												</div>

												
												<?php }

											?>
										</tbody>
										</table>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		
	</div>
<script type="text/javascript">
function insertCity() {
    var code=$("#code").val();
    var state=$("#state").val();
    var city=$("#city").val();
    var description=$("#description").val();
    var loading = ('<center>loading...</center>');

 	
 	if(code == '' && state == '' && city == '' && description == '') {
 	 alert('Please Add All Information');
 	}else {
       
        $.ajax({
            type: "POST",
            url: "add_city.php",
            data: {code:code,state:state,city:city, description:description},
            dataType: "JSON",
            success: function(data) {
           	loading.appendTo('#loading');
            },
           
        });
        $("form").trigger("reset"); //to rest the form
 }
}
</script>


<?php
	include('template/footer.php');
?>

