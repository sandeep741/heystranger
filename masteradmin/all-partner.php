<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include('header.php'); ?>
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
      <script type="text/javascript" src="js/datatables.min.js"></script>
      <script type="text/javascript" src="js/responsive.min.js"></script>
      <script type="text/javascript" src="js/select2.min.js"></script>
      <script type="text/javascript" src="js/app.js"></script>
      <script type="text/javascript" src="js/datatables_responsive.js"></script>
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
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Partner Management</span> - All Partner</h4>
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
                        <li><a href="">Partner Management</a></li>
                        <li class="active">All Partner</li>
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
                  <!-- Basic responsive configuration -->
                  <div class="panel panel-flat">
                     <div class="panel-heading">
                        <h5 class="panel-title">All Partner</h5>
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
                              <th>Sr</th>
                              
                              <th>User Name</th>
                              <th>Member Name</th>
                              <th>Email</th>
                              <th>Contact</th>
                              <th>Joining Date</th>
                              <th>Status</th>
                              <!--<th class="text-center">Actions</th>-->
                           </tr>
                        </thead>
                        <tbody>
						<?php 
                         $i=1;
                         $query=mysql_query("select * from partner");
                         while($row=mysql_fetch_assoc($query))
						 {
						
						
					   ?>
                           <tr>
                              <td><?php echo $i; ?></td>
                              
                              <td><a href="#"><?php echo $row['username']; ?></a></td>
                              <td><?php echo $row['first_name'].''.$row['last_name']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['telephone']; ?></td>
                              <td><?php echo $row['registration_date']; ?></td>
                              <td>
							  <?php if($row['partner_status']=='0'){ ?>
							  <span class="label label-success">
							  Active
							  </span>
							  <?php } else { ?>
							  <span class="label label-danger">
							  Inactive
							  </span>
							  <?php } ?>
							 
							  </td>
                              <!--<td class="text-center">
                                 <ul class="icons-list">
                                    <li class="dropdown">
                                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                       <i class="icon-menu9"></i>
                                       </a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="edit-profile.php?eid=<?php echo $row['partner_id']; ?>"><i class="icon-pencil7"></i> Edit Profile</a></li>
                                         
                                       </ul>
                                    </li>
                                 </ul>
                              </td>-->
                           </tr>
						   <?php
						   $i++;
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