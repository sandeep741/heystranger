
<div class="navbar navbar-inverse">
         <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><img src="images/logo_light.png" alt=""></a>
            <ul class="nav navbar-nav visible-xs-block">
               <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
               <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
         </div>
         <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
               <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-users4"></i>
                  <span class="visible-xs-inline-block position-right">New Member</span>
				  <?php 
				   $today_reg=mysql_query("select * from partner where registration_date='".date('Y-m-d')."'");
				  ?>
                  <span class="badge bg-warning-400"><?php echo mysql_num_rows($today_reg);?> </span>
                  </a>
                  <div class="dropdown-menu dropdown-content">
                     <div class="dropdown-content-heading">
                        New Member
                        <ul class="icons-list">
                           <li><a href="#"><i class="icon-sync"></i></a></li>
                        </ul>
                     </div>
                     <ul class="media-list dropdown-content-body width-350">
					 <?php
					 while($row=mysql_fetch_assoc($today_reg))
					 {
					 ?>
                        <li class="media">
                           <div class="media-left">
                              <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-user-check"></i></a>
                           </div>
						   
                           <div class="media-body">
                              <a href="javascript-void(0);"><?php echo $row['first_name'].' '.$row['last_name'];?></a>
                              <div class="media-annotation"><?php echo $row['ts'];  ?></div>
                           </div>
                        </li>
                        <?php
						}
						?>
                     </ul>
                     <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="View All Registered Member"><i class="icon-menu display-block"></i></a>
                     </div>
                  </div>
               </li>
            </ul>
            <p class="navbar-text"><span class="label bg-success-400">Online</span></p>
            <ul class="nav navbar-nav navbar-right">
               
               <li class="dropdown dropdown-user">
			   <?php $uer=mysql_fetch_array(mysql_query("select * from admin where id=1")); ?>
                  <a class="dropdown-toggle" data-toggle="dropdown">
                  <img src="images/<?php echo $uer['image'];?>" alt="">
                  <span><?php echo $uer['name'];?></span>
                  <i class="caret"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <!-- <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                     <li><a href="#"><i class="icon-coins"></i> My Wallet balance</a></li>
                     <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                     <li class="divider"></li>
                     <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>-->
					 <li><a href="myprofile.php"><i class="icon-user-plus"></i> My profile</a></li>
                     <li><a href="check-point.php?logout=true"><i class="icon-switch2"></i> Logout</a></li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>