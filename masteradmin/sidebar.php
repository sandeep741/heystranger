<div class="sidebar sidebar-main">
               <div class="sidebar-content">
                  <!-- User menu -->
                  <div class="sidebar-user">
                     <div class="category-content">
                        <div class="media">
                           <a href="#" class="media-left"><img src="images/<?php echo $uer['image'];?>" class="img-circle img-sm" alt=""></a>
                           <div class="media-body">
                              <span class="media-heading text-semibold"><?php echo $uer['name'];?></span>
                              <div class="text-size-mini text-muted">
                                 <i class="icon-pin text-size-small"></i> &nbsp;<?php echo $uer['email'];?>
                              </div>
                           </div>
                           <div class="media-right media-middle">
                              <ul class="icons-list">
                                 <li>
                                    <a href="#"><i class="icon-cog3"></i></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /user menu -->
                  <!-- Main navigation -->
                  <div class="sidebar-category sidebar-category-visible">
                     <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">
                           <!-- Main -->
                           <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                           <li class="active"><a href="index.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                           
                           <li>
                              <a href="#"><i class="icon-users4"></i> <span>Partner Management</span></a>
                              <ul>
                                 <li><a href="all-partner.php"><i class="icon-users4"></i> All Partner List</a></li>
                                 
                                 <li><a href="pending-partner.php"><i class="icon-user-cancel"></i> View Pending Partner</a></li>
                                 <li class="navigation-divider"></li>
                                 <li><a href="password-tracker.php"><i class="icon-folder-search"></i> Password Tracker</a></li>
                           
                              </ul>
                           </li>
						   
						   <li>
                              <a href="#"><i class="icon-users4"></i> <span>Data Management</span></a>
                              <ul>
                           <li><a href="accommo-list.php"><i class="icon-users4"></i> Accommodation List</a></li>
                           <li><a href="amenity-list.php"><i class="icon-users4"></i> Amenity List</a></li>
                           <li><a href="activity-list.php"><i class="icon-users4"></i> Activity List</a></li>
                           <li><a href="room-type-list.php"><i class="icon-users4"></i> Room Type List</a></li>
                           <!--<li><a href="item-list.php"><i class="icon-users4"></i> Item List</a></li>		
						   <li><a href="feature-list.php"><i class="icon-users4"></i> Feature List</a></li>-->       
						   <li><a href="pay-mode-list.php"><i class="icon-users4"></i> Payment Mode List</a></li>
						   <li><a href="surround-list.php"><i class="icon-users4"></i>Surrounding List</a></li>
                                 
                           
                              </ul>
                           </li>
                           
                           
                           
                        </ul>
                     </div>
                  </div>
                  <!-- /main navigation -->
               </div>
            </div>