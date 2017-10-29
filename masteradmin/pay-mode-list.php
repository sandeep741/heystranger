<!DOCTYPE html>
<html lang="en">
   <head>
      <?php
	  include('header.php'); 
	  
if(isset($_GET['did']))
{
$did=$_GET['did'];
mysql_query("delete from pay_mode where id='$did' ");

     $_SESSION['mymsg']='Delete Successfully';
	  echo "<script>window.location='pay-mode-list.php';</script>";
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
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Data Management</span> - Pay Mode</h4>
                     </div>
                     <div class="heading-elements">
                        <div class="heading-btn-group">
                         <a href="add-pay-mode.php" class="btn btn-success"><i class="icon-comment-discussion position-left"></i> Add New Payment Mode</a>
                          
                        </div>
                     </div>
                  </div>
                  <div class="breadcrumb-line">
                     <ul class="breadcrumb">
                        <li><a href="index.php"><i class="icon-home2 position-left"></i> Home</a></li>
                        <li><a href="">Data Management</a></li>
                        <li class="active">Payment Mode</li>
					
							<?php if($_SESSION['mymsg']!=''){ ?><li style='color:green;font-weight:bold'><?php echo $_SESSION['mymsg']; unset($_SESSION['mymsg']); ?> </li><?php } ?>
						<?php if($_SESSION['myerror']!=''){ ?><li style='color:red;font-weight:bold'><?php echo $_SESSION['myerror']; unset($_SESSION['myerror']); ?> </li><?php } ?>
                     </ul>
                     
                  </div>
               </div>
               <!-- /page header -->
               <!-- Content area -->
               <div class="content">
                  <!-- Basic responsive configuration -->
                  <div class="panel panel-flat">
                     <div class="panel-heading">
                        <h5 class="panel-title">Payment Mode</h5>
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
                              
                              <th>Name</th>
                              
                              <th>Actions</th>
                              
                           </tr>
                        </thead>
                        <tbody>
						<?php 
                         $i=1;
                         $query=mysql_query("select * from paymode order by name asc");
                         while($row=mysql_fetch_assoc($query))
						 {
						
						
					   ?>
                           <tr>
                              <td><?php echo $i; ?></td>
                              
                              <td><?php echo $row['name']; ?></td>
                              
                              <td>
                                 <ul class="icons-list">
                                    <li class="dropdown">
                                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                       <i class="icon-menu9"></i>
                                       </a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="add-pay-mode.php?aaid=<?php echo $row['id']; ?>"><i class="icon-pencil7"></i> Edit</a></li>
                                          <li><a onclick="return confirm('Are you sure?');" href="pay-mode-list.php?did=<?php echo $row['id']; ?>"><i class="icon-pencil7"></i>Delete</a></li>
                                         
                                       </ul>
                                    </li>
                                 </ul>
                              </td>
							  
                              
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