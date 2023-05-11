<?php
	include('user_header.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script type="text/javascript">
	$(document).ready(function() {
    $('#donor').DataTable();
} );
</script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">

  <h2>Hello,  <span style="color: blue"> <?php echo $_SESSION['membername']?></span> Listed Donor. </h2> <br />
  <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddonor">Donate Blood</button></p> <br />           
  
   <h2>Recent Donors</h2> <br />

   

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">All Groups</a></li>
    <li><a data-toggle="tab" href="#menu1">A+ &nbsp;</a></li>
    <li><a data-toggle="tab" href="#menu2">B+ &nbsp;</a></li>
    <li><a data-toggle="tab" href="#menu3">AB+ &nbsp;</a></li>
    <li><a data-toggle="tab" href="#menu4">O+ &nbsp;</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>All Donors</h3>
      <p><?php 
  $donor = $connection->query("SELECT * FROM donor");
  while($fetch = $donor->fetch_array()){ ?>
  <div class="col-md-4">
              <!-- PANEL WITH FOOTER -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $fetch['father_name'];?></h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                  </div>
                </div>
                <div class="panel-body">
                  <p><img width="270px" height="150px" src="../<?php echo $fetch['image'];?>"></p>
                </div>
                <div class="panel-footer">
                  <a href="" data-toggle="modal" data-target="#view_donor<?php echo $fetch['donor_id']?>"><h5>View More Info</h5></a>
                </div>
              </div>
              <!-- END PANEL WITH FOOTER -->
            </div>

  <!-- view donor modal -->
   <div class="modal fade" id="view_donor<?php echo $fetch['donor_id']?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">View <?php echo $fetch['name']?>'s Details</h4>
        </div>
        <div class="modal-body">
        <form method="post" action="view_donor.php?donor_id=<?php echo $fetch['donor_id']?>">
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['name']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['father_name']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['gender']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['dob']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['body_weight']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['email']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['state']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['city']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['pincode']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['phone']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['username_fk']?>" class="form-control" readonly></input>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">OKAY</button>
          <button type="submit" class="btn btn-primary" >View Profile</button>
        </div>
      </div>
      </form>
      
    </div>
  </div>
  <?php }
?></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Donors With A+</h3>
      <p><?php 
  $donor = $connection->query("SELECT * FROM donor WHERE blood_group='A+'");
  while($fetch = $donor->fetch_array()){ ?>
  <div class="col-md-4">
              <!-- PANEL WITH FOOTER -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $fetch['father_name'];?></h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                  </div>
                </div>
                <div class="panel-body">
                  <p><img width="270px" height="150px" src="../<?php echo $fetch['image'];?>"></p>
                </div>
                <div class="panel-footer">
                  <a href="" data-toggle="modal" data-target="#view_donor<?php echo $fetch['donor_id']?>"><h5>View More Info</h5></a>
                </div>
              </div>
              <!-- END PANEL WITH FOOTER -->
            </div>

  <!-- view donor modal -->
   <div class="modal fade" id="view_donor<?php echo $fetch['donor_id']?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">View <?php echo $fetch['name']?>'s Details</h4>
        </div>
        <div class="modal-body">
        <form method="post" action="view_donor.php?donor_id=<?php echo $fetch['donor_id']?>">
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['name']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['father_name']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['gender']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['dob']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['body_weight']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['email']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['state']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['city']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['pincode']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['phone']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['username_fk']?>" class="form-control" readonly></input>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">OKAY</button>
          <button type="submit" class="btn btn-primary" >View Profile</button>
        </div>
      </div>
      </form>
      
    </div>
  </div>
  <?php }
?></p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Donors With B+</h3>
      <p><?php 
  $donor = $connection->query("SELECT * FROM donor WHERE blood_group='B+'");
  while($fetch = $donor->fetch_array()){ ?>
  <div class="col-md-4">
              <!-- PANEL WITH FOOTER -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $fetch['father_name'];?></h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                  </div>
                </div>
                <div class="panel-body">
                  <p><img width="270px" height="150px" src="../<?php echo $fetch['image'];?>"></p>
                </div>
                <div class="panel-footer">
                  <a href="" data-toggle="modal" data-target="#view_donor<?php echo $fetch['donor_id']?>"><h5>View More Info</h5></a>
                </div>
              </div>
              <!-- END PANEL WITH FOOTER -->
            </div>

  <!-- view donor modal -->
   <div class="modal fade" id="view_donor<?php echo $fetch['donor_id']?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">View <?php echo $fetch['name']?>'s Details</h4>
        </div>
        <div class="modal-body">
        <form method="post" action="view_donor.php?donor_id=<?php echo $fetch['donor_id']?>">
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['name']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['father_name']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['gender']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['dob']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['body_weight']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['email']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['state']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['city']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['pincode']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['phone']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['username_fk']?>" class="form-control" readonly></input>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">OKAY</button>
          <button type="submit" class="btn btn-primary" >View Profile</button>
        </div>
      </div>
      </form>
      
    </div>
  </div>
  <?php }
?></p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Donors With AB+</h3>
      <p><?php 
  $donor = $connection->query("SELECT * FROM donor WHERE blood_group='AB+'");
  while($fetch = $donor->fetch_array()){ ?>
  <div class="col-md-4">
              <!-- PANEL WITH FOOTER -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $fetch['father_name'];?></h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                  </div>
                </div>
                <div class="panel-body">
                  <p><img width="270px" height="150px" src="../<?php echo $fetch['image'];?>"></p>
                </div>
                <div class="panel-footer">
                  <a href="" data-toggle="modal" data-target="#view_donor<?php echo $fetch['donor_id']?>"><h5>View More Info</h5></a>
                </div>
              </div>
              <!-- END PANEL WITH FOOTER -->
            </div>

  <!-- view donor modal -->
   <div class="modal fade" id="view_donor<?php echo $fetch['donor_id']?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">View <?php echo $fetch['name']?>'s Details</h4>
        </div>
        <div class="modal-body">
        <form method="post" action="view_donor.php?donor_id=<?php echo $fetch['donor_id']?>">
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['name']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['father_name']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['gender']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['dob']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['body_weight']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['email']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['state']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['city']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['pincode']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['phone']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['username_fk']?>" class="form-control" readonly></input>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">OKAY</button>
          <button type="submit" class="btn btn-primary" >View Profile</button>
        </div>
      </div>
      </form>
      
    </div>
  </div>
  <?php }
?></p>
    </div>
     <div id="menu4" class="tab-pane fade">
      <h3>Donors With O+</h3>
      <p><?php 
  $donor = $connection->query("SELECT * FROM donor WHERE blood_group='O+'");
  while($fetch = $donor->fetch_array()){ ?>
  <div class="col-md-4">
              <!-- PANEL WITH FOOTER -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $fetch['father_name'];?></h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                  </div>
                </div>
                <div class="panel-body">
                  <p><img width="270px" height="150px" src="../<?php echo $fetch['image'];?>"></p>
                </div>
                <div class="panel-footer">
                  <a href="" data-toggle="modal" data-target="#view_donor<?php echo $fetch['donor_id']?>"><h5>View More Info</h5></a>
                </div>
              </div>
              <!-- END PANEL WITH FOOTER -->
            </div>

  <!-- view donor modal -->
   <div class="modal fade" id="view_donor<?php echo $fetch['donor_id']?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">View <?php echo $fetch['name']?>'s Details</h4>
        </div>
        <div class="modal-body">
        <form method="post" action="view_donor.php?donor_id=<?php echo $fetch['donor_id']?>">
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['name']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['father_name']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['gender']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['dob']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['body_weight']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['email']?>" class="form-control" readonly></input>
          </div>
           <div class="form-group">
            <input type="text" value="<?php echo $fetch['state']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['city']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['pincode']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['phone']?>" class="form-control" readonly></input>
          </div>
          <div class="form-group">
            <input type="text" value="<?php echo $fetch['username_fk']?>" class="form-control" readonly></input>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">OKAY</button>
          <button type="submit" class="btn btn-primary" >View Profile</button>
        </div>
      </div>
      </form>
      
    </div>
  </div>
  <?php }
?></p>
    </div>
  </div>






  


</div>
	</div>
</div>

<!-- add donor modal -->
<div class="modal fade" id="adddonor" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Donor Details</h4>
        </div>
        <div class="modal-body">
        <form action="add_donor.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
          	<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"></input>
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" name="fathername" id="fathername" placeholder="Enter fathername"></input>
          </div>

          <div class="form-group">
            <select class="form-control" name="gender" id="gender" >
              <option value="male">Male</option>
              <option value="female">Female</option>
               <option value="other">Other</option>
            </select>
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" name="datepicker" id="datepicker" placeholder="Enter dob"></input>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="weight" id="weight" placeholder="Enter weight"></input>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"></input>
          </div>

           <div class="form-group">
            <select class="form-control" name="state" id="state" >
            <?php 
            $state = $connection->query("SELECT * FROM state");
            while($row = $state->fetch_array()){ ?>
             <option value="<?php echo $row['state_name'];?>"><?php echo $row['state_name'];?></option>
            
            <?php }
            ?>
             
            </select>
          </div>

          <div class="form-group">
            <select class="form-control" name="city" id="city" >
            <?php 
            $state = $connection->query("SELECT * FROM city");
            while($row = $state->fetch_array()){ ?>
             <option value="<?php echo $row['city_name'];?>"><?php echo $row['city_name'];?></option>
            
            <?php }
            ?>
             
            </select>
          </div>


          <div class="form-group">
            <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter pincode"></input>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone"></input>
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" name="address" id="address" placeholder="Enter Address"></textarea>
          </div>
          
          <div class="form-group">
            <input type="file" class="form-control" name="photo" id="photo" ></input>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="addmember">Add</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
  <!-- end of add donor modal -->


  <!-- end of view donor modal -->
<?php
	include('user_footer.php');
?>