<html lang="en">
<head>
	<?php
	include('header.php'); 
	
	if($p['partner_status']!=1)
	  {
	  header('location:index.php');
	  }
	  
	  if(isset($_REQUEST['upload']))
	  {
	  
	  if($_FILES['upload']['name']=='')
	  {
	  $_SESSION['myerror']='please upload proof of payment';
	  echo "<script>window.location='upload-proof.php';</script>";
	  exit();
	  }
	  
	  $file_name = time()."H_".$_FILES['upload']['name'];
	  
      move_uploaded_file($_FILES['upload']['tmp_name'],"receipt/".$file_name);
	  
	  
	  mysql_query("update partner set receipt='$file_name' where partner_id='$p[partner_id]'");
	  
	  $_SESSION['mymsg']='Proof uploaded Successfully';
	  echo "<script>window.location='index.php';</script>";
	  exit();
	  
	  }
	  
		
	?>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/core.css" rel="stylesheet" type="text/css">
	<link href="css/components.css" rel="stylesheet" type="text/css">
	<link href="css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="js/pace.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="js/select2.min.js"></script>
	<script type="text/javascript" src="js/uniform.min.js"></script>

	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/form_layouts.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<?php include('nav.php'); ?>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php include('sidebar.php'); ?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
						<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Upload Proof </span></h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.php"><i class="icon-home2 position-left"></i> Home</a></li>
							
							<li class="active">Upload Proof</li>
						</ul>

						<!--<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>-->
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">


					<!-- 2 columns form -->
					
						<div class="panel panel-flat">
							<div class="panel-heading">
							<h5 style='color:green;text-align:center'><?php if(isset($_SESSION['mymsg'])){ echo $_SESSION['mymsg']; unset($_SESSION['mymsg']); } ?></h5>
							<h5 style='color:red;text-align:center'><?php if(isset($_SESSION['myerror'])){ echo $_SESSION['myerror']; unset($_SESSION['myerror']); } ?></h5>
								<h5 class="panel-title">Upload proof of payment</h5>
								
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                		<li><a data-action="close"></a></li>
				                	</ul>
			                	</div>
							</div>
								
							<div class="panel-body">
								<div class="row">
									<div class="col-md-8">
									<form class="form-horizontal" method='POST' enctype='multipart/form-data'>
										<fieldset>
					<legend class="text-semibold"><i class="icon-reading position-left"></i> Upload here</legend>

											<div class="form-group">
                                             <label class="col-lg-3 control-label">Upload Proof</label>
                                                <div class="col-lg-9">   
                                                   <input type="file" required class="file-styled" name='upload'>
                                             </div>
                                          </div>
											
											
													<div class="text-right">
									<button type="submit" name='upload' class="btn btn-primary">Upload <i class="icon-arrow-right14 position-right"></i></button>
								</div>
										</fieldset>
										</form>
									</div>

									
									
							
								</div>

								
							</div>
						</div>
						
						
					
					<!-- /2 columns form -->


					<!-- Footer -->
					<?php include('footer.php'); ?>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
