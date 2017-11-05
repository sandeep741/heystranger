<html lang="en">
   <head>
      <?php
	  include("header.php");
	 
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
       
      <script type="text/javascript" src="js/sweet_alert.min.js"></script>
      <script type="text/javascript" src="js/app.js"></script>
      <script type="text/javascript" src="js/components_modals.js"></script>
         <script type="text/javascript" src="js/datatables.min.js"></script>
      <script type="text/javascript" src="js/responsive.min.js"></script>
      <script type="text/javascript" src="js/select2.min.js"></script>
      <script type="text/javascript" src="js/datatables_responsive.js"></script>
	       
      <!-- /core JS files -->
      <!-- Theme JS files -->
      <script type="text/javascript" src="js/select2.min.js"></script>
      <script type="text/javascript" src="js/uniform.min.js"></script>
     
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
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
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
                        <li class="active">Dashboard</li>
						
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
                              <li><a href="#"><i class="icon-user-lock"></i> This Week Registered</a></li>
                              <li><a href="#"><i class="icon-statistics"></i> This Month Registered</a></li>
                              <li><a href="#"><i class="icon-accessibility"></i> This Year Registered</a></li>
                              <li class="divider"></li>
                              <li><a href="#"><i class="icon-gear"></i> View All Member</a></li>
                           </ul>
                        </li>
                     </ul>-->
                  </div>
               </div>
               <!-- /page header -->
               <!-- Content area -->
               <div class="content">
                 
                 <div class="col-md-12">
				 
				 <?php if(isset($_SESSION['mymsg']))
				 {
				 ?>
				 <div class="alert bg-danger alert-styled-right">
										<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
										<span class="text-semibold"><?php echo $_SESSION['mymsg']; ?></span>
					</div>
				 <?php
				 unset($_SESSION['mymsg']); 
				 } 
				 ?>
				 	
					<div class="alert bg-yellow alert-styled-right">
										<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
										<span class="text-semibold">Welcome : <?php echo $p['username']; ?></span>
					</div>
                 </div>
                 
                 <div class="col-md-4">
                   <div class="panel">
								<div class="panel-body text-center">
									<div class="icon-object border-success text-success"><i class="icon-book"></i></div>
									<h5 class="text-semibold">Email</h5>
									
									<span class="btn bg-yellow"><?php echo $p['email']; ?></span>
								</div>
							</div>
                 </div>
                 
                   <div class="col-md-4">
                   <div class="panel">
								<div class="panel-body text-center">
									<div class="icon-object border-success text-success"><i class="icon-book"></i></div>
		
									<h5 class="text-semibold">Test</h5>
									
									<span class="btn bg-yellow">Test</span>
								</div>
							</div>
                 </div>
                 
                   <div class="col-md-4">
                   <div class="panel">
								<div class="panel-body text-center">
									<div class="icon-object border-success text-success"><i class="icon-book"></i></div>
									
									
									<h5 class="text-semibold">Test</h5>
									<span class="btn bg-yellow">Test</span>
								</div>
							</div>
                 </div>
				 
                 <div class="row">
				 
                 <div class="col-md-6">
				  
				 </div>
				
                 </div>
              
					</div>
					
					 <div class="content">
                  
				  
				 
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