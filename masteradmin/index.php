<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("header.php");?>
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
      <script type="text/javascript" src="js/d3.min.js"></script>
      <script type="text/javascript" src="js/d3_tooltip.js"></script>
      <script type="text/javascript" src="js/switchery.min.js"></script>
      <script type="text/javascript" src="js/uniform.min.js"></script>
      <script type="text/javascript" src="js/bootstrap_multiselect.js"></script>
      <script type="text/javascript" src="js/moment.min.js"></script>
      <script type="text/javascript" src="js/daterangepicker.js"></script>
      <script type="text/javascript" src="js/app.js"></script>
      <script type="text/javascript" src="js/dashboard.js"></script>
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
			
			<?php
			 $member=mysql_fetch_assoc(mysql_query("select(select count(id) from partner where partner_status='0') as active,(select count(id) from partner where partner_status='1') as inactive"));
							  
			?>
			
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
                  <!-- Main charts -->
                  
                  
                  	<!-- Inside tabs -->
					<h6 class="content-group text-semibold">
						Quick Setting
						<small class="display-block">Partner Management Setting</small>
					</h6>

					<div class="tabbable tab-content-bordered content-group-lg">
						<ul class="nav nav-tabs nav-lg nav-tabs-highlight">
							<li class="active">
								<a href="#james" data-toggle="tab">
								 Partner Management <span class="status-mark position-right border-danger"></span>
								</a>
							</li>

							<!--<li>
								<a href="#william" data-toggle="tab">
								E-Shop Management <span class="status-mark position-right border-success"></span>
								</a>
							</li>

							<li>
								<a href="#jared" data-toggle="tab">
								E-Wallet Management <span class="status-mark position-right border-warning"></span>
								</a>
							</li>

							<li>
								<a href="#victoria" data-toggle="tab">
								E-Pin/Voucher Management <span class="status-mark position-right border-grey-300"></span>
								</a>
							</li>-->
						</ul>

						<div class="tab-content">
							<div class="tab-pane fade in active has-padding" id="james">
								<div class="row">
                    <div class="category-content">
							<div class="row">
							  	<div class="col-xs-4">
									 
									  <a href="all-partner.php"><button class="btn bg-blue btn-block btn-float btn-float-lg" type="button"><i class="icon-people"></i> <span>View All Partner</span></button> </a>
									  <br>
									  <a href="active-member.php"><button class="btn bg-teal-400 btn-block btn-float btn-float-lg" type="button"><i class="icon-collaboration"></i> <span>Pending Partner <?php echo $member['inactive']; ?></span></button></a>
								  </div>
								  <div class="col-xs-4">
							
							<a href="password-tracker.php"><button class="btn bg-purple-300 btn-block btn-float btn-float-lg" type="button"><i class="icon-keyboard"></i> <span>Password Tracker</span></button></a>
							
									 
								  </div>
								  <div class="col-xs-4">
									  
								  </div>
							</div>
						</div>
                  </div>

		                   
							</div>

							
						</div>
					</div>
					<!-- /inside tabs -->
                  
                 
                  
                  
                  
                  <!-- /main charts -->
                  <!-- Dashboard content -->
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Marketing campaigns -->
                        <div class="panel panel-flat">
                           <div class="panel-heading">
                              <h6 class="panel-title">Partner Tracker</h6>
							  
                              <div class="heading-elements">
                                 <span class="label bg-success heading-text"><?php echo $member['active']; ?> active</span>
                                 <ul class="icons-list">
                                    <li class="dropdown">
                                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                       <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                          <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
                                          <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                          <li class="divider"></li>
                                          <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="table-responsive">
                              <table class="table table-lg text-nowrap">
                                 <tbody>
                                    <tr>
                                       <td class="col-md-5">
                                          <div class="media-left">
                                             <div id="campaigns-donut"></div>
                                          </div>
                                          <div class="media-left">
                                             <h5 class="text-semibold no-margin"><?php echo $member['active']; ?></h5>
                                             <ul class="list-inline list-inline-condensed no-margin">
                                                <li>
                                                   <span class="status-mark border-success"></span>
                                                </li>
                                                <li>
                                                   <span class="text-muted">Active Member</span>
                                                </li>
                                             </ul>
                                          </div>
                                       </td>
                                       <td class="col-md-5">
                                          <div class="media-left">
                                             <div id="campaign-status-pie"></div>
                                          </div>
                                          <div class="media-left">
                                             <h5 class="text-semibold no-margin"><?php echo $member['inactive']; ?></h5>
                                             <ul class="list-inline list-inline-condensed no-margin">
                                                <li>
                                                   <span class="status-mark border-danger"></span>
                                                </li>
                                                <li>
                                                   <span class="text-muted">Inactive Member</span>
                                                </li>
                                             </ul>
                                          </div>
                                       </td>
                                       <td class="text-right col-md-2">
                                          <a href="all-partner.php" class="btn bg-indigo-300"><i class="icon-statistics position-left"></i> View All Member</a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           
                        </div>
                        
                       
                     </div>
                     
                  </div>
                  <!-- /dashboard content -->
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