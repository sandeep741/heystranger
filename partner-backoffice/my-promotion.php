<!DOCTYPE html>

<html lang="en">
   <head>
      <?php
	  include('header.php'); 
	  
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
	  <script type="text/javascript" src="js/fancybox.min.js"></script>
	  
      <script type="text/javascript" src="js/sweet_alert.min.js"></script>
	  <script type="text/javascript" src="js/uniform.min.js"></script>
      <script type="text/javascript" src="js/select2.min.js"></script>
      
      <script type="text/javascript" src="js/components_modals.js"></script>
      <!-- /core JS files -->
      <!-- Theme JS files -->
      <script type="text/javascript" src="js/datatables.min.js"></script>
      <script type="text/javascript" src="js/responsive.min.js"></script>
      
      <script type="text/javascript" src="js/app.js"></script>
      <script type="text/javascript" src="js/datatables_responsive.js"></script>
	  <script type="text/javascript" src="js/gallery_library.js"></script>
	  
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
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Report </span> - Promotion</h4>
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
                        
                        <li class="active">Promotion Report</li>
						
                     </ul>
                     
                  </div>
               </div>
               <!-- /page header -->
               <!-- Content area -->
               <div class="content">
                  <!-- Basic responsive configuration -->
                  <div class="panel panel-flat">
                     <div class="panel-heading">
                        <h5 class="panel-title">Promotion Report</h5>
                        <div class="heading-elements">
                           <ul class="icons-list">
                              <li><a data-action="collapse"></a></li>
                              <li><a data-action="reload"></a></li>
                              <li><a data-action="close"></a></li>
                           </ul>
                        </div>
                     </div>
                    <table class="table datatable-responsive">
                        <thead>
                           <tr>
                              <th>Sr.</th>
                              <th>Accommodation Name</th>
                              <th>Type</th>
                              <th>Date</th>
                              <th>Detail</th>
                              <th class="text-center">Actions</th>
                           </tr>
                        </thead>
                        <tbody>
						<?php
						$b=1;
						
						$qr=mysql_query("select * from promotion_detail");
						while($row=mysql_fetch_assoc($qr))
						{
						
						?>
                           <tr>
                              <td><?php echo $b; ?></td>
                              
                              <td><?php echo $row['accomod_name']; ?></td>
                              <td><?php echo $row['accomod_type']; ?></td>
                              <td><?php echo $row['cdate']; ?></td>
                              <td><?php echo $row['detail']; ?></td>
                                
                              </td>
                              <td class="text-center">
                                 <ul class="icons-list">
                                    <li class="dropdown">
                                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                       <i class="icon-menu9"></i>
                                       </a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="add-promotion.php?aid=<?php echo $row['id']; ?>"><i class="icon-pencil7"></i> Edit file</a></li>
                                          
                                       </ul>
                                    </li>
                                 </ul>
                              </td>
                           </tr>
						   <?php
						   $b++;
						   }
						   ?>
                           
                          
                          
                        </tbody>
                     </table>
                  </div>
                  <!-- /basic responsive configuration -->
                 
                 
                 
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