
<div class="navbar navbar-inverse">
         <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><img src="../images/logo-white.png"  alt=""></a>
            <ul class="nav navbar-nav visible-xs-block">
               <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
               <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
         </div>
         <div class="navbar-collapse collapse" id="navbar-mobile">
          
            <p class="navbar-text"><span class="label bg-success-400">Online</span></p>
            <ul class="nav navbar-nav navbar-right">
               
               <li class="dropdown dropdown-user">
			   <?php $uer=mysql_fetch_array(mysql_query("select * from partner where partner_id='$_SESSION[pid]'")); ?>
                  <a class="dropdown-toggle" data-toggle="dropdown">
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
                  <span><?php echo $uer['username'];?></span>
                  <i class="caret"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    
					 <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                     <li><a href="../logout.php"><i class="icon-switch2"></i> Logout</a></li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>