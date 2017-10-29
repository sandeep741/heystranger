<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('header.php'); 
	
if(isset($_REQUEST['pic']))
{
  $head10=$_FILES['uploadedfile']['name'];
    if($head10!='')
    {
    $name12=$_FILES['uploadedfile']['name'];
    $ext = end(explode(".",$name12));
    $filename12 = time()."main_".$_FILES["uploadedfile"]["name"];
    move_uploaded_file($_FILES["uploadedfile"]["tmp_name"],"images/" .$filename12);
    $imagename1 = time()."small_728x90".$name12;
    mysql_query("update admin set image='$filename12' where id=1");
	
	$_SESSION['mymsg']='Image Change Successfully!';
	  echo "<script>window.location='myprofile.php';</script>";
	  exit();  
    
    }
    else
    {
     $_SESSION['myerror']='Please upload a image!';
	  echo "<script>window.location='myprofile.php';</script>";
	  exit();
    }
}


if(isset($_REQUEST['pass']))
{
   $password=$_POST['password'];
   $password1=$_POST['password1'];
   
   if($password=='' || $password1=='')
   {
   $_SESSION['myerror']='Please Fill Both Field!';
	  echo "<script>window.location='myprofile.php';</script>";
	  exit();
   
   }
   
   if($password==$password1)
   {
   $password12 = hash("sha256",$password1);
   mysql_query("update admin set password='$password12' where id=1");
   $_SESSION['mymsg']='Login Password Change Successfully!';
	  echo "<script>window.location='myprofile.php';</script>";
	  exit();
   
   }
   else
   {
   $_SESSION['myerror']='Password Does Not Match!';
	  echo "<script>window.location='myprofile.php';</script>";
	  exit();
   }
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Manage Profile</span></h4>
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
							<li><a href="">Profile</a></li>
							<li class="active">Edit Profile</li>
						</ul>
						
						<ul class="breadcrumb">
						<?php if($_SESSION['mymsg']!=''){ ?><li style='color:green;font-weight:bold'><?php echo $_SESSION['mymsg']; unset($_SESSION['mymsg']); ?> </li><?php } ?>
						<?php if($_SESSION['myerror']!=''){ ?><li style='color:red;font-weight:bold'><?php echo $_SESSION['myerror']; unset($_SESSION['myerror']); ?> </li><?php } ?>	
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

					<!-- Horizontal form options -->
					<div class="row">
					<div class='col-md-12'>
					
						<div class="col-md-6">
						<button class="btn bg-teal-400 btn-block btn-float btn-float-lg" type="button"> Change Password</button>
							
							<!-- Basic layout-->
							<form method='POST' class="form-horizontal">
							
								<div class="panel panel-flat">
								
									<div class="panel-heading">
								   
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">
									  <div class="form-group">
											<label class="col-lg-4 control-label">Password</label>
											<div class="col-lg-8">
								<input type="password" name='password' class="form-control" required placeholder='Enter Password' value="">
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-lg-4 control-label">Confirm Password</label>
											<div class="col-lg-8">
								<input type="password" name='password1' class="form-control" required placeholder='Re-Enter Password' name='confirm'>
											</div>
										</div>
										
								<div class="text-center" style='margin-bottom: 44px;'>
									<button type="submit"  name="pass" class="btn btn-primary" >Change<i class="icon-arrow-right14 position-right" ></i></button>
								</div>

									</div>
								</div>
							</form>
							<!-- /basic layout -->

						</div>
						
						
						<div class="col-md-6">
				<button class="btn bg-purple-400 btn-block btn-float btn-float-lg" type="button">Change Profile Picture</button>
									  
								  
							<!-- Basic layout-->
							<form method='POST' class="form-horizontal" enctype="multipart/form-data">
								<div class="panel panel-flat">
									<div class="panel-heading">
										
										
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">
									  <div class="form-group">
									  <?php 
								$ress=mysql_fetch_assoc(mysql_query("select * from admin where user_id='123456'"));	
									  ?>
								
											<div class="col-lg-12">
											<img src="images/<?php echo $ress['image']; ?>" width='100px' height='100px'>
								<div class="media-body">
														<input type="file" class="file-styled" name='uploadedfile'>
														<!--<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>-->
													</div>
											</div>
										</div>
										
								<div class="text-center">
									<button type="submit"  name="pic" class="btn btn-primary" >Change<i class="icon-arrow-right14 position-right"></i></button>
								</div>

									</div>
								</div>
							</form>
							<!-- /basic layout -->

						</div>

						</div>
					</div>
					

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
