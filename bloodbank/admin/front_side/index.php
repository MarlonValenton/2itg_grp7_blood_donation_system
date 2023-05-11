<?php
	include('connection.php');
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome To Blood Bank System</title>
	<!-- Meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- //Bootstrap Css -->
	<link href="css/font-awesome.css" rel="stylesheet"><!-- //Font-awesome Css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- //Required Css -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--//fonts-->

</head>

<body>
	<!--Slider-->
	<div class="slider">
	<div class="banner-dott1">
		<!-- header -->
		<div class="header">
			<div class="container">
				<div class="w3l_header_left">
					
				</div>
				<div class="w3l_header_right">
					<div class="w3ls-social-icons">
						<a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
						<a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
						<a class="pinterest" href="#"><span class="fa fa-pinterest-p"></span></a>
						<a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<!-- //header -->
		<div class="header-bottom">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
						<div class="logo">
							<h1><a class="navbar-brand" href="index.html"><span>A</span>ccounts</a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-1" id="cl-effect-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php" data-hover="Home">Request</a></li>
								<li><a href="request_post.php" data-hover="About">Post Request</a></li>
								<!-- <li class="dropdown menu__item">
									<a href="#" class="dropdown-toggle menu__link active" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true"
									    aria-expanded="false">Pages<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="codes.html">Short Codes</a></li>
										<li><a href="icons.html">Web Icons</a></li>
									</ul>
								</li> -->
								<!-- <li><a href="projects.html" data-hover="Categories">Projects</a></li> -->
								<li><a href="contact.html" data-hover="Contact">Contact</a></li>
								<li><a href="member_login.php" data-hover="Contact">Login</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
		<div class="container">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>

						<div class="slider-info">
							<h3>We Provide Proper Tax Solutions</h3>
							<p>Affordable tax advisory services for your benefit</p>
						</div>
					</li>
					<li>
						<div class="slider-info">
							<h3>Tax Strategy Management</h3>
							<p>Improving the effectiveness of your tax strategy</p>
						</div>
					</li>
					<li>
						<div class="slider-info">
							<h3>Tax Compliance & Reporting</h3>
							<p>Ensuring that tax and process risks are minimized</p>
						</div>
					</li>

				</ul>

			</div>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>

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

	<br/>	<br/>
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

	<!-- <?php
	$post = $connection->query("SELECT image FROM requester");
	while($row = $post->fetch_array()){ 

	foreach($row as $filename){ ?>
     	<div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="images/g1.jpg">
						<img src="<?php echo $filename; ?>" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Accounts</h4>
							<p>Projects</p>
						</div>
						</a>
					</div>
					
				</div>
	<?php }
}
	?> -->

	<div class="gallery">
		<div class="container">
			<h3 class="title-txt">Recent Request</h3>
			<div class="agile_gallery_grids w3-agile demo">
			<?php 
					$post = $connection->query("SELECT * FROM requester");
					while($row = $post->fetch_array()){ ?>
					
				<div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
				
					<div class="gallery-grid1">
					<a href="" data-toggle="modal" data-target="#request_details<?php echo $row['requester_id']?>">
						<img src="<?php echo $row['image'];?>" style="display: block;max-width: 100%;
						height: 200px;" class="img-responsive" />
						</a>
						<br />
					</div>
				</div>
				<!-- view Modal -->
<div class="modal fade" id="request_details<?php echo $row['requester_id']?>" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title">Modal Header</h5>
        </div>
        <div class="modal-body">
          <h6><strong>Patient Name</strong><?php echo $row['patient_name']; ?></h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
        </div>
      </div>
    </div>
  </div>
			
					<?php }
					?>

				<div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="images/g1.jpg">
						<img src="images/g1.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Accounts</h4>
							<p>Projects</p>
						</div>
						</a>
					</div>
					
				</div><br>
				<div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="images/g1.jpg">
						<img src="images/g1.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Accounts</h4>
							<p>Projects</p>
						</div>
						</a>
					</div>
					
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="images/g1.jpg">
						<img src="images/g1.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Accounts</h4>
							<p>Projects</p>
						</div>
						</a>
					</div>
					
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="images/g1.jpg">
						<img src="images/g1.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Accounts</h4>
							<p>Projects</p>
						</div>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<?php
	include('template/footer.php');
	?>