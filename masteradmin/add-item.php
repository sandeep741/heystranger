<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('header.php'); 
	
if(isset($_GET['aaid']))
{
$aaid=$_GET['aaid'];
$adata=mysql_fetch_assoc(mysql_query("select * from item where id='$aaid' "));
}

if(isset($_REQUEST['add']))
{
$item_name=$_POST['item_name'];
  mysql_query("INSERT INTO `item`(`id`, `name`) VALUES ('','$item_name')");
 
     $_SESSION['mymsg']='Add Successfully';
	  echo "<script>window.location='add-item.php';</script>";
	  exit(); 
}

if(isset($_REQUEST['update']))
{
$item_name=$_POST['item_name'];
  mysql_query("update item set name='$item_name' where id='$aaid'");
 
     $_SESSION['mymsg']='Update Successfully';
	 echo "<script>window.location='add-item.php?aaid=".$aaid."';</script>";
	  
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Item</span></h4>
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
							<li class="active">Item</li>
							<?php if($_SESSION['mymsg']!=''){ ?><li style='color:green;font-weight:bold'><?php echo $_SESSION['mymsg']; unset($_SESSION['mymsg']); ?> </li><?php } ?>
						<?php if($_SESSION['myerror']!=''){ ?><li style='color:red;font-weight:bold'><?php echo $_SESSION['myerror']; unset($_SESSION['myerror']); ?> </li><?php } ?>
						</ul>

					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Horizontal form options -->
					<div class="row">
						<div class="col-md-12">

							<!-- Basic layout-->
							<?php
							if(isset($aaid) && $aaid!='')
							{
							?>
							<form  class="form-horizontal" method='POST'>
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Edit Item</h5>
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
											<label class="col-lg-3 control-label">Name</label>
											<div class="col-lg-9">
						<input type="text" class="form-control" name="item_name" value="<?php echo $adata['name']; ?>">
											</div>
										</div>
										
												<div class="text-right">
									<button type="submit"  name="update" class="btn btn-primary" >Update <i class="icon-arrow-right14 position-right"></i></button>
								</div>

									</div>
								</div>
							</form>
							<?php
							}
							else
							{
							?>
							<form  class="form-horizontal" method='POST'>
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Add Item</h5>
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
											<label class="col-lg-3 control-label">Name</label>
											<div class="col-lg-9">
						<input type="text" class="form-control" name="item_name">
											</div>
										</div>
										
												<div class="text-right">
									<button type="submit"  name="add" class="btn btn-primary" >Add <i class="icon-arrow-right14 position-right"></i></button>
								</div>

									</div>
								</div>
							</form>
							<?php
							}
							?>
							<!-- /basic layout -->

						</div>

						
					</div>
					<!-- /vertical form options -->

					
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
