<?php
	include('template/header.php');

?>



<div class="main" >
<div class="main-content">
	<div class="col-md-12">
	<div class="panel">
	<div class="panel-heading">
									<h3 class="panel-title">Registered Members</h3>
								</div>
								<div class="panel-body">
								<table id="myTable" class="table table-bordered">
									<thead>
											<tr>
												
												<th>Name</th>
												<th>Username</th>
												
												<th>Email</th>
												<th>Phone</th>
												<th>Pic</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										<?php
										$select = $connection->query("SELECT * FROM member");
										while($row = $select->fetch_array()){ ?>
										<tr>
													<td><?php echo $row['name'];?></td>
													<td><?php echo $row['username'];?></td>
													<td><?php echo $row['email'];?></td>
													<td><?php echo $row['phone'];?></td>
													
													<td><img src="front_side/<?php echo $row['profile'];?>" width="30px" height="30px"></td>
													<td><a href="#delete<?php echo $row['member_id']; ?>" data-toggle="modal" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
													<a href="#edit<?php echo $row['member_id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a>
													</td>
												</tr>

												<!-- for delete modal in this case i have take the id from while loop and pass it to modal id -->
												<div class="modal fade" id="delete<?php echo $row['member_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
												<a href="delete_members.php?member_id=<?php echo $row['member_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
												</div>

												</div>
												</div>
												</div>
												<!-- edit blood group -->

												<!-- <div class="modal fade" id="edit<?php echo $row['member_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog">
												<div class="modal-content">
												<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<center><h2 class="modal-title" id="myModalLabel">Are You Sure?</h2></center>
												</div>
												<div class="modal-body">
									
				
												
									<div class="container-fluid">
									<form action="edit_members.php?member_id=<?php echo $row['member_id']; ?>" method="post">		 
									<input class="form-control" name="bname" id="bname" type="text" value="<?php echo $row['blood_group']?>">
									<br>
									
									

												</div> 
												</div>
												<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
												<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</button>
												</div>
</form>	
												</div>
												</div>
												</div> -->
									

									 <?php	}
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
function insertblood() {
    var bname=$("#bname").val();
   
    var loading = ('<center>loading...</center>');

 	
 	if(bname == '') {
 	 alert('Please Add All Information');
 	}else {
       
        $.ajax({
            type: "POST",
            url: "add_blood.php",
            data: {bname:bname},
            dataType: "JSON",
            success: function(data) {
           	loading.appendTo('#loading');
            },
           
        });
        $("form").trigger("reset"); //to rest the form
 }
}
</script>
<script type="text/javascript">
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<?php
	include('template/footer.php');
?>

