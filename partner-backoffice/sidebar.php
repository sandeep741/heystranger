<div class="sidebar sidebar-main">
               <div class="sidebar-content">
                  <!-- User menu -->
                  <div class="sidebar-user">
                     <div class="category-content">
                        <div class="media">
                           <a href="#" class="media-left">
						   <?php
				  if($uer['image']=='')
				  {
				  ?>
				  <img src="images/male.jpg" alt="">
				  <?php
				  }
				  else
				  {
				  ?>
				  <img src="images/<?php echo $uer['image'];?>" alt="">
				  <?php
				  }
				  ?>
						   </a>
                           <div class="media-body">
                              <span class="media-heading text-semibold"><?php echo $uer['username'];?></span>
                              
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
						   <li ><a href="../index.php"><i class="icon-home4"></i> <span>Access Front End</span></a></li>
						   <?php
						   if($p['partner_status']==1)
						   {
						   ?>
						   <li>
                              <a href="#"><i class="icon-users4"></i> <span>Proof of payment</span></a>
                              <ul>
                                 <li><a href="upload-proof.php"><i class="icon-users4"></i>Upload Proof</a></li>
                                 
                                 
                              </ul>
                           </li>
						   <?php
						   }
						   else
						   {
						   ?>
							<li>
                              <a href="#"><i class="icon-users4"></i> <span>Accommodation</span></a>
                              <ul>
                                 <li><a href="my-accommodation.php"><i class="icon-users4"></i>My Accommodation</a></li>
                                 <li><a href="add-accommodation.php"><i class="icon-users4"></i>Add Accommodation</a></li>
                                 
                                 
                              </ul>
                           </li>
						   
						   <li>
                              <a href="#"><i class="icon-users4"></i> <span>Venue & Conference</span></a>
                              <ul>
                                 <li><a href="my_venue_confer.php"><i class="icon-users4"></i>Venue & Conference listing</a></li>
                                 <li><a href="add_venue_confer.php"><i class="icon-users4"></i>Add Venue & Conference</a></li>
                                 
                                 
                              </ul>
                           </li>
						   
						   <li>
                              <a href="#"><i class="icon-users4"></i> <span>Promotion</span></a>
                              <ul>
                                 <li><a href="my-promotion.php"><i class="icon-users4"></i>Promotion listing</a></li>
                                 <li><a href="add-promotion.php"><i class="icon-users4"></i>Add Promotion</a></li>
                                 
                                 
                              </ul>
                           </li>
						   
						   
						   <?php
						   }
						   ?>
						   
                          
                        </ul>
                     </div>
                  </div>
                  <!-- /main navigation -->
               </div>
            </div>