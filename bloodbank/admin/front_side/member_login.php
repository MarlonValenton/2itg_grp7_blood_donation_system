<?php
	include('template/header.php');

?>
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Accounts</h4>
					<img src="images/g10.jpg" alt=" " class="img-responsive">
					
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
						dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
						book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="contact-agile contact-page">
		<div class="container">
			<h3 class="title-txt">Get in Touch</h3>
			<div class="contact-eql">
				<div class="contact-left">
					<h4>About Us</h4>
					<p class="para-w3-agileits">Most visited blood bank system in sri lanka. get register,request and donate as you want.</p>
					<h4>Find Us</h4>
					<div class="add-info">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
						<p>140/2 kandy road, thihariya. sri lanka</p>
					</div>
					<div class="add-info">
						<span class="fa fa-phone" aria-hidden="true"></span>
						<p>778 650 336</p>
					</div>
					<div class="add-info">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<p><a href="">webriderat@gmail.com</a></p>
					</div>
					<div class="w3ls-social-icons">
						<a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
						<a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
						<a class="pinterest" href="#"><span class="fa fa-pinterest-p"></span></a>
						<a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
					</div>
				</div>
				<div class="contact-middle">
					<h4>Start Your Session Here</h4>
					<form action="auth_login.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<p>Username</p>
							<input type="text" name="uname" id="uname" class="form-control" placeholder="Enter Username" required="" />
						</div>
						<div class="form-group">
							<p>Password</p>
							<input type="password" name="password" placeholder="Enter Password" class="form-control" required="" />
						</div>
						
						<input type="submit" value="Login">


					</form><a href="member_register.php">Not a member ? Register Here</a>
				</div>
			</div>
		</div>
	</div>
	
	<?php
	include('template/footer.php');
	?>