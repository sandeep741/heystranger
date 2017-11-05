<!DOCTYPE html>
<html lang="en">
   <head>
      <?php
	include('header.php'); 
	
	if(isset($_REQUEST['profile_img']))
	{
	$head10=$_FILES['profile_file']['name'];
    if($head10!='')
    {
    $name12=$_FILES['profile_file']['name'];
    $ext = end(explode(".",$name12));
    $filename12 = time()."main_".$_FILES["profile_file"]["name"];
    move_uploaded_file($_FILES["profile_file"]["tmp_name"],"images/" .$filename12);
    
    mysql_query("update user_registration set image='$filename12' where user_id='$_SESSION[userpanel_user_id]'");
	
	  $_SESSION['display_msg']='Image Change Successfully!';
	  echo "<script>window.location='update-profile.php';</script>";
	  exit();
	}
	}
	
	if(isset($_REQUEST['update_bank']))
{
  $account_name=$_POST['account_name'];
  $account_no=$_POST['account_no'];
  $branch_name=$_POST['branch_name'];
  $bank_name=$_POST['bank_name'];
  $swift_code=$_POST['swift_code'];

mysql_query("update user_registration set acc_name='$account_name', bank_nm='$bank_name', branch_nm='$branch_name', ac_no='$account_no', swift_code='$swift_code' where user_id='$_SESSION[userpanel_user_id]'");

$_SESSION['display_msg']='Update Successfully';
echo "<script>window.location='update-profile.php';</script>";
exit();

}

if(isset($_REQUEST['update_social']))
{
  $fb=$_POST['fb'];
  $twitter=$_POST['twitter'];
  $linkedin=$_POST['linkedin'];
  $gplus=$_POST['gplus'];
  $pinterest=$_POST['pinterest'];
  

mysql_query("update user_registration set fb='$fb', twitter='$twitter', linkedin='$linkedin', gplus='$gplus',pinterest='$pinterest' where user_id='$_SESSION[userpanel_user_id]'");

$_SESSION['display_msg']='Update Successfully';
echo "<script>window.location='update-profile.php';</script>";
exit();
}


if(isset($_REQUEST['detail_update']))
{
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  $country=$_POST['country'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $password=$_POST['password'];
  
  $dob=$_POST['dob'];
  $sex=$_POST['sex'];
  $zipcode=$_POST['zipcode'];

  mysql_query("update user_registration set first_name='$first_name', last_name='$last_name', email='$email', password='$password', t_code='$tpassword', address='$address', country='$country', state='$state', city='$city', zipcode='$zipcode', telephone='$contact', dob='$dob', sex='$sex'  where user_id='$_SESSION[userpanel_user_id]'");

$_SESSION['display_msg']='Update Successfully';  
echo "<script>window.location='update-profile.php';</script>";
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
      <script type="text/javascript" src="js/moment.min.js"></script>
      <script type="text/javascript" src="js/fullcalendar.min.js"></script>
      <script type="text/javascript" src="js/echarts.js"></script>
      <script type="text/javascript" src="js/app.js"></script>
      <script type="text/javascript" src="js/user_pages_profile.js"></script>
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
               <div class="page-header no-margin">
                  <div class="page-header-content">
                     <div class="page-title">
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">User Pages</span> - Profile Cover</h4>
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
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                        <li><a href="user_pages_profile_cover.html">User pages</a></li>
                        <li class="active">Profile cover</li>
                     </ul>
                     <ul class="breadcrumb-elements">
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
                     </ul>
                  </div>
               </div>
               <!-- /page header -->
               <!-- Cover area -->
               <div class="profile-cover">
                  <div class="profile-cover-img" style="background-image: url(images/cover2.jpg)"></div>
                  <div class="media">
                     <div class="media-left">
                        <a href="javascript:void(0)" class="profile-thumb">
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
                     </div>
                     <div class="media-body">
                        <h1><?php echo $name; ?> <small class="display-block"><?php echo $f['username']; ?></small></h1>
                     </div>
                     <div class="media-right media-middle">
                        <ul class="list-inline list-inline-condensed no-margin-bottom text-nowrap">
                           
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- /cover area -->
               <!-- Toolbar -->
               <div class="navbar navbar-default navbar-xs content-group">
                  <ul class="nav navbar-nav visible-xs-block">
                     <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
                  </ul>
                  <div class="navbar-collapse collapse" id="navbar-filter">
                     <ul class="nav navbar-nav element-active-slate-400">
                        <li class="active"><a href="#activity" data-toggle="tab"><i class="icon-menu7 position-left"></i> view</a></li>
                        
                        <li><a href="#settings" data-toggle="tab"><i class="icon-cog3 position-left"></i> Edit</a></li>
                        
                        <li><a href="#profile_img" data-toggle="tab"><i class="icon-cog3 position-left"></i>Profile Image</a></li>
						
						   
                        <li><a href="javascript:void(0)" style='color:green'> <?php if($_SESSION['display_msg']!=''){ echo $_SESSION['display_msg']; unset($_SESSION['display_msg']); } ?></a></li>
                     </ul>
                     <div class="navbar-right">
                        <ul class="nav navbar-nav">
                           <li><a href="#"><i class="icon-stack-text position-left"></i> Notes</a></li>
                           <li><a href="#"><i class="icon-collaboration position-left"></i> Friends</a></li>
                           <li><a href="#"><i class="icon-images3 position-left"></i> Photos</a></li>
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gear"></i> <span class="visible-xs-inline-block position-right"> Options</span> <span class="caret"></span></a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                 <li><a href="#"><i class="icon-image2"></i> Update cover</a></li>
                                 <li><a href="#"><i class="icon-clippy"></i> Update info</a></li>
                                 <li><a href="#"><i class="icon-make-group"></i> Manage sections</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#"><i class="icon-three-bars"></i> Activity log</a></li>
                                 <li><a href="#"><i class="icon-cog5"></i> Profile settings</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- /toolbar -->
               <!-- Content area -->
               <div class="content">
                  <!-- User profile -->
                  <div class="row">
                     <div class="col-lg-9">
                        <div class="tabbable">
                           <div class="tab-content">
                              <div class="tab-pane fade in active" id="activity">
                                 <!-- Profile info -->
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">View Personal information</h6>
                                       <div class="heading-elements">
                                          <ul class="icons-list">
                                             <li><a data-action="collapse"></a></li>
                                             <li><a data-action="reload"></a></li>
                                             <li><a data-action="close"></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="panel-body">
                                      <table class='table table-bordered table-striped'>
									  <tr>
									  <td><strong>Username : </strong></td>
									  <td><?php echo $f['username']; ?></td>
									  <td><strong>User Id : </strong></td>
									  <td><?php echo $f['user_id']; ?></td>
									  </tr>
									  <tr>
									 <td><strong>First Name : </strong></td>
									  <td><?php echo $f['first_name']; ?></td>
									  <td><strong>Last Name : </strong></td>
									  <td><?php echo $f['last_name']; ?></td>
									  </tr>
									  <tr>
									  <td><strong>Email : </strong></td>
									  <td><?php echo $f['email']; ?></td>
									  <td><strong>Contact No. : </strong></td>
									  <td><?php echo $f['telephone']; ?></td>
									  </tr>
									  
									  <tr>
									  <td><strong>Zipcode : </strong></td>
									  <td><?php echo $f['zipcode']; ?></td>
									  <td><strong>Address : </strong></td>
									  <td><?php echo $f['address']; ?></td>
									  </tr>
									  
									  </table>
                                    </div>
                                 </div>
                                 <!-- /profile info -->
                                 <!-- Account settings -->
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">Bank Detail</h6>
                                       <div class="heading-elements">
                                          <ul class="icons-list">
                                             <li><a data-action="collapse"></a></li>
                                             <li><a data-action="reload"></a></li>
                                             <li><a data-action="close"></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="panel-body">
                                       <table class='table table-bordered table-striped'>
									  <tr>
									  <td><strong>Account Name : </strong></td>
									  <td><?php echo $f['acc_name']; ?></td>
									  <td><strong>Account No. : </strong></td>
									  <td><?php echo $f['ac_no']; ?></td>
									  </tr>
									  <tr>
									 <td><strong>Bank Name : </strong></td>
									  <td><?php echo $f['bank_nm']; ?></td>
									  <td><strong>Branch Name : </strong></td>
									  <td><?php echo $f['branch_nm']; ?></td>
									  </tr>
									  <tr>
									  <td><strong>Branch Code : </strong></td>
									  <td><?php echo $f['swift_code']; ?></td>
									  
									  </tr>
									  
									  </table>
                                    </div>
                                 </div>
								 
								 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">Social Media Detail</h6>
                                       <div class="heading-elements">
                                          <ul class="icons-list">
                                             <li><a data-action="collapse"></a></li>
                                             <li><a data-action="reload"></a></li>
                                             <li><a data-action="close"></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="panel-body">
                                       <table class='table table-bordered table-striped'>
									  <tr>
									  <td><strong>Facebook : </strong></td>
									  <td><?php echo $f['fb']; ?></td>
									  <td><strong>Twitter. : </strong></td>
									  <td><?php echo $f['twitter']; ?></td>
									  </tr>
									  <tr>
									 <td><strong>Google Plus : </strong></td>
									  <td><?php echo $f['gplus']; ?></td>
									  <td><strong>Linkedin : </strong></td>
									  <td><?php echo $f['linkedin']; ?></td>
									  </tr>
									  <tr>
									  <td><strong>Pinterest : </strong></td>
									  <td><?php echo $f['pinterest']; ?></td>
									  
									  </tr>
									  
									  </table>
                                    </div>
                                 </div>
                                 <!-- /account settings -->
                              </div>
                              
                              <div class="tab-pane fade" id="settings">
                                
                                <div class="panel panel-flat">
							<div class="panel-heading">
							
								<h5 class="panel-title">Member Detail</h5>
								
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                		<li><a data-action="close"></a></li>
				                	</ul>
			                	</div>
							</div>
								<?php
								$user_detail=mysql_fetch_assoc(mysql_query("select * from user_registration where user_id='$_SESSION[userpanel_user_id]'"));
								
								?>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
									<form class="form-horizontal" method='POST'>
										<fieldset>
											<legend class="text-semibold"><i class="icon-reading position-left"></i> Personal Details</legend>

											<div class="form-group">
												<label class="col-lg-3 control-label">Username:</label>
												<div class="col-lg-9">
													<input type="text" readonly class="form-control" value="<?php echo $user_detail['username']; ?>">
												</div>
											</div>

											<div class="form-group">
												<label class="col-lg-3 control-label">User ID</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" readonly value="<?php echo $user_detail['user_id']; ?>">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">First Name</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" name='first_name' value="<?php echo $user_detail['first_name']; ?>">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Last name</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" name='last_name' value="<?php echo $user_detail['last_name']; ?>">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Email</label>
												<div class="col-lg-9">
													<input type="email" class="form-control" name='email' value="<?php echo $user_detail['email']; ?>">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Contact No.</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" name='contact' value="<?php echo $user_detail['telephone']; ?>">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Zipcode</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" name='zipcode' value="<?php echo $user_detail['zipcode']; ?>">
												</div>
											</div>
											
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Address:</label>
												<div class="col-lg-9">
													<textarea rows="5" cols="5" class="form-control" name="address"><?php echo $user_detail['address']; ?></textarea>
												</div>
											</div>
											
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Select your country:</label>
												<div class="col-lg-9">
													<select class="select" name='country'>
					<option value="<?php echo $user_detail['country'];?>"><?php echo $user_detail['country'];?></option>
                      <option value="United States">United States</option> 
                      <option value="United Kingdom">United Kingdom</option> 
                      <option value="Afghanistan">Afghanistan</option> 
                      <option value="Albania">Albania</option> 
                      <option value="Algeria">Algeria</option> 
                      <option value="American Samoa">American Samoa</option> 
                      <option value="Andorra">Andorra</option> 
                      <option value="Angola">Angola</option> 
                      <option value="Anguilla">Anguilla</option> 
                      <option value="Antarctica">Antarctica</option> 
                      <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                      <option value="Argentina">Argentina</option> 
                      <option value="Armenia">Armenia</option> 
                      <option value="Aruba">Aruba</option> 
                      <option value="Australia">Australia</option> 
                      <option value="Austria">Austria</option> 
                      <option value="Azerbaijan">Azerbaijan</option> 
                      <option value="Bahamas">Bahamas</option> 
                      <option value="Bahrain">Bahrain</option> 
                      <option value="Bangladesh">Bangladesh</option> 
                      <option value="Barbados">Barbados</option> 
                      <option value="Belarus">Belarus</option> 
                      <option value="Belgium">Belgium</option> 
                      <option value="Belize">Belize</option> 
                      <option value="Benin">Benin</option> 
                      <option value="Bermuda">Bermuda</option> 
                      <option value="Bhutan">Bhutan</option> 
                      <option value="Bolivia">Bolivia</option> 
                      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                      <option value="Botswana">Botswana</option> 
                      <option value="Bouvet Island">Bouvet Island</option> 
                      <option value="Brazil">Brazil</option> 
                      <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                      <option value="Brunei Darussalam">Brunei Darussalam</option> 
                      <option value="Bulgaria">Bulgaria</option> 
                      <option value="Burkina Faso">Burkina Faso</option> 
                      <option value="Burundi">Burundi</option> 
                      <option value="Cambodia">Cambodia</option> 
                      <option value="Cameroon">Cameroon</option> 
                      <option value="Canada">Canada</option> 
                      <option value="Cape Verde">Cape Verde</option> 
                      <option value="Cayman Islands">Cayman Islands</option> 
                      <option value="Central African Republic">Central African Republic</option> 
                      <option value="Chad">Chad</option> 
                      <option value="Chile">Chile</option> 
                      <option value="China">China</option> 
                      <option value="Christmas Island">Christmas Island</option> 
                      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                      <option value="Colombia">Colombia</option> 
                      <option value="Comoros">Comoros</option> 
                      <option value="Congo">Congo</option> 
                      <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                      <option value="Cook Islands">Cook Islands</option> 
                      <option value="Costa Rica">Costa Rica</option> 
                      <option value="Cote D'ivoire">Cote D'ivoire</option> 
                      <option value="Croatia">Croatia</option> 
                      <option value="Cuba">Cuba</option> 
                      <option value="Cyprus">Cyprus</option> 
                      <option value="Czech Republic">Czech Republic</option> 
                      <option value="Denmark">Denmark</option> 
                      <option value="Djibouti">Djibouti</option> 
                      <option value="Dominica">Dominica</option> 
                      <option value="Dominican Republic">Dominican Republic</option> 
                      <option value="Ecuador">Ecuador</option> 
                      <option value="Egypt">Egypt</option> 
                      <option value="El Salvador">El Salvador</option> 
                      <option value="Equatorial Guinea">Equatorial Guinea</option> 
                      <option value="Eritrea">Eritrea</option> 
                      <option value="Estonia">Estonia</option> 
                      <option value="Ethiopia">Ethiopia</option> 
                      <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                      <option value="Faroe Islands">Faroe Islands</option> 
                      <option value="Fiji">Fiji</option> 
                      <option value="Finland">Finland</option> 
                      <option value="France">France</option> 
                      <option value="French Guiana">French Guiana</option> 
                      <option value="French Polynesia">French Polynesia</option> 
                      <option value="French Southern Territories">French Southern Territories</option> 
                      <option value="Gabon">Gabon</option> 
                      <option value="Gambia">Gambia</option> 
                      <option value="Georgia">Georgia</option> 
                      <option value="Germany">Germany</option> 
                      <option value="Ghana">Ghana</option> 
                      <option value="Gibraltar">Gibraltar</option> 
                      <option value="Greece">Greece</option> 
                      <option value="Greenland">Greenland</option> 
                      <option value="Grenada">Grenada</option> 
                      <option value="Guadeloupe">Guadeloupe</option> 
                      <option value="Guam">Guam</option> 
                      <option value="Guatemala">Guatemala</option> 
                      <option value="Guinea">Guinea</option> 
                      <option value="Guinea-bissau">Guinea-bissau</option> 
                      <option value="Guyana">Guyana</option> 
                      <option value="Haiti">Haiti</option> 
                      <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                      <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                      <option value="Honduras">Honduras</option> 
                      <option value="Hong Kong">Hong Kong</option> 
                      <option value="Hungary">Hungary</option> 
                      <option value="Iceland">Iceland</option> 
                      <option value="India">India</option> 
                      <option value="Indonesia">Indonesia</option> 
                      <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                      <option value="Iraq">Iraq</option> 
                      <option value="Ireland">Ireland</option> 
                      <option value="Israel">Israel</option> 
                      <option value="Italy">Italy</option> 
                      <option value="Jamaica">Jamaica</option> 
                      <option value="Japan">Japan</option> 
                      <option value="Jordan">Jordan</option> 
                      <option value="Kazakhstan">Kazakhstan</option> 
                      <option value="Kenya">Kenya</option> 
                      <option value="Kiribati">Kiribati</option> 
                      <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                      <option value="Korea, Republic of">Korea, Republic of</option> 
                      <option value="Kuwait">Kuwait</option> 
                      <option value="Kyrgyzstan">Kyrgyzstan</option> 
                      <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                      <option value="Latvia">Latvia</option> 
                      <option value="Lebanon">Lebanon</option> 
                      <option value="Lesotho">Lesotho</option> 
                      <option value="Liberia">Liberia</option> 
                      <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                      <option value="Liechtenstein">Liechtenstein</option> 
                      <option value="Lithuania">Lithuania</option> 
                      <option value="Luxembourg">Luxembourg</option> 
                      <option value="Macao">Macao</option> 
                      <option value="Macedonia">Macedonia</option> 
                      <option value="Madagascar">Madagascar</option> 
                      <option value="Malawi">Malawi</option> 
                      <option value="Malaysia">Malaysia</option> 
                      <option value="Maldives">Maldives</option> 
                      <option value="Mali">Mali</option> 
                      <option value="Malta">Malta</option> 
                      <option value="Marshall Islands">Marshall Islands</option> 
                      <option value="Martinique">Martinique</option> 
                      <option value="Mauritania">Mauritania</option> 
                      <option value="Mauritius">Mauritius</option> 
                      <option value="Mayotte">Mayotte</option> 
                      <option value="Mexico">Mexico</option> 
                      <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                      <option value="Moldova, Republic of">Moldova, Republic of</option> 
                      <option value="Monaco">Monaco</option> 
                      <option value="Mongolia">Mongolia</option> 
                      <option value="Montserrat">Montserrat</option> 
                      <option value="Morocco">Morocco</option> 
                      <option value="Mozambique">Mozambique</option> 
                      <option value="Myanmar">Myanmar</option> 
                      <option value="Namibia">Namibia</option> 
                      <option value="Nauru">Nauru</option> 
                      <option value="Nepal">Nepal</option> 
                      <option value="Netherlands">Netherlands</option> 
                      <option value="Netherlands Antilles">Netherlands Antilles</option> 
                      <option value="New Caledonia">New Caledonia</option> 
                      <option value="New Zealand">New Zealand</option> 
                      <option value="Nicaragua">Nicaragua</option> 
                      <option value="Niger">Niger</option>
                      <option value="Nigeria">Nigeria</option>
                      <option value="Niue">Niue</option> 
                      <option value="Norfolk Island">Norfolk Island</option> 
                      <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                      <option value="Norway">Norway</option> 
                      <option value="Oman">Oman</option> 
                      <option value="Pakistan">Pakistan</option> 
                      <option value="Palau">Palau</option> 
                      <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                      <option value="Panama">Panama</option> 
                      <option value="Papua New Guinea">Papua New Guinea</option> 
                      <option value="Paraguay">Paraguay</option> 
                      <option value="Peru">Peru</option> 
                      <option value="Philippines">Philippines</option> 
                      <option value="Pitcairn">Pitcairn</option> 
                      <option value="Poland">Poland</option> 
                      <option value="Portugal">Portugal</option> 
                      <option value="Puerto Rico">Puerto Rico</option> 
                      <option value="Qatar">Qatar</option> 
                      <option value="Reunion">Reunion</option> 
                      <option value="Romania">Romania</option> 
                      <option value="Russian Federation">Russian Federation</option> 
                      <option value="Rwanda">Rwanda</option> 
                      <option value="Saint Helena">Saint Helena</option> 
                      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                      <option value="Saint Lucia">Saint Lucia</option> 
                      <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                      <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                      <option value="Samoa">Samoa</option> 
                      <option value="San Marino">San Marino</option> 
                      <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                      <option value="Saudi Arabia">Saudi Arabia</option> 
                      <option value="Senegal">Senegal</option> 
                      <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                      <option value="Seychelles">Seychelles</option> 
                      <option value="Sierra Leone">Sierra Leone</option> 
                      <option value="Singapore">Singapore</option> 
                      <option value="Slovakia">Slovakia</option> 
                      <option value="Slovenia">Slovenia</option> 
                      <option value="Solomon Islands">Solomon Islands</option> 
                      <option value="Somalia">Somalia</option> 
                      <option value="South Africa">South Africa</option> 
                      <option value="South Georgia">South Georgia</option> 
                      <option value="Spain">Spain</option> 
                      <option value="Sri Lanka">Sri Lanka</option> 
                      <option value="Sudan">Sudan</option> 
                      <option value="Suriname">Suriname</option> 
                      <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                      <option value="Swaziland">Swaziland</option> 
                      <option value="Sweden">Sweden</option> 
                      <option value="Switzerland">Switzerland</option> 
                      <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                      <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                      <option value="Tajikistan">Tajikistan</option> 
                      <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                      <option value="Thailand">Thailand</option> 
                      <option value="Timor-leste">Timor-leste</option> 
                      <option value="Togo">Togo</option> 
                      <option value="Tokelau">Tokelau</option> 
                      <option value="Tonga">Tonga</option> 
                      <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                      <option value="Tunisia">Tunisia</option> 
                      <option value="Turkey">Turkey</option> 
                      <option value="Turkmenistan">Turkmenistan</option> 
                      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                      <option value="Tuvalu">Tuvalu</option> 
                      <option value="Uganda">Uganda</option> 
                      <option value="Ukraine">Ukraine</option> 
                      <option value="United Arab Emirates">United Arab Emirates</option> 
                      <option value="United Kingdom">United Kingdom</option> 
                      <option value="United States">United States</option> 
                      <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                      <option value="Uruguay">Uruguay</option> 
                      <option value="Uzbekistan">Uzbekistan</option> 
                      <option value="Vanuatu">Vanuatu</option> 
                      <option value="Venezuela">Venezuela</option> 
                      <option value="Viet Nam">Viet Nam</option> 
                      <option value="Virgin Islands, British">Virgin Islands, British</option> 
                      <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                      <option value="Wallis and Futuna">Wallis and Futuna</option> 
                      <option value="Western Sahara">Western Sahara</option> 
                      <option value="Yemen">Yemen</option> 
                      <option value="Zambia">Zambia</option> 
                      <option value="Zimbabwe">Zimbabwe</option>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">State</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" name='state' value="<?php echo $user_detail['state']; ?>">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">City</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" name='city' value="<?php echo $user_detail['city']; ?>">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Password</label>
												<div class="col-lg-9">
													<input type="password" class="form-control" name='password' value="<?php echo $user_detail['password']; ?>">
												</div>
											</div>
											
										
											
											<div class="form-group">
												<label class="col-lg-3 control-label">DOB</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" name='dob' value="<?php echo $user_detail['dob']; ?>">
												</div>
											</div>

											<div class="form-group">
												<label class="col-lg-3 control-label">Select Your Gender:</label>
												<div class="col-lg-9">
													<select  class="select" name='sex'>
										<option value="<?php echo $user_detail['sex'];?>"><?php echo $user_detail['sex'];?></option>
													<option value='Male'>Male</option>
													<option value='Female'>Female</option>
													<option value='Other'>Other</option>
													</select>
												</div>
											</div>


											
													<div class="text-right">
									<button type="submit" name='detail_update' class="btn btn-primary">Update <i class="icon-arrow-right14 position-right"></i></button>
								</div>
										</fieldset>
										</form>
									</div>

									<div class="col-md-6">
									
									<form class="form-horizontal" method="POST">
										<fieldset>
						                	<legend class="text-semibold"><i class="icon-wallet"></i> Bank Details</legend>
											<div class="form-group">
												<label class="col-lg-3 control-label">Account Name:</label>
												<div class="col-lg-9">
									<input type="text" name='account_name' placeholder="Enter Account Name" class="form-control" value="<?php echo $user_detail['acc_name']; ?>">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Account No.</label>
												<div class="col-lg-9">
													<input type="text" name="account_no" placeholder="Enter Account No." value="<?php echo $user_detail['ac_no']; ?>" class="form-control">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Bank Name:</label>
												<div class="col-lg-9">
													<input type="text" name="bank_name" placeholder="Enter Bank Name" value="<?php echo $user_detail['bank_nm']; ?>" class="form-control">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Branch Name:</label>
												<div class="col-lg-9">
													<input type="text"  name="branch_name"value="<?php echo $user_detail['branch_nm']; ?>" placeholder="Enter Branch Name" class="form-control">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Branch Code:</label>
												<div class="col-lg-9">
													<input type="text" name='swift_code' value="<?php echo $user_detail['swift_code']; ?>" placeholder="Enter IFSC/Swift Code" class="form-control">
												</div>
											</div>

											<div class="text-right">
									<button type="submit"  name="update_bank" class="btn btn-primary" >Update <i class="icon-arrow-right14 position-right"></i></button>
								</div>
										</fieldset>
										</form>
									</div>
									
									<div class="col-md-6">
									
									<form class="form-horizontal" method="POST">
										<fieldset>
						                	<legend class="text-semibold"><i class="icon-wallet"></i> Social Media</legend>
											<div class="form-group">
												<label class="col-lg-3 control-label">Facebook:</label>
												<div class="col-lg-9">
									<input type="text" name='fb' placeholder="Enter your facebook link" class="form-control" value="<?php echo $user_detail['fb']; ?>">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Twitter:</label>
												<div class="col-lg-9">
													<input type="text" name="twitter" placeholder="Enter your twitter link" value="<?php echo $user_detail['twitter']; ?>" class="form-control">
												</div>
											</div>
											
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Google Plus:</label>
												<div class="col-lg-9">
													<input type="text"  name="gplus"value="<?php echo $user_detail['gplus']; ?>" placeholder="Enter your G+ link" class="form-control">
												</div>
											</div>
											
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Linkedin:</label>
												<div class="col-lg-9">
													<input type="text"  name="linkedin" value="<?php echo $user_detail['linkedin']; ?>" placeholder="Enter your Linkedin link" class="form-control">
												</div>
											</div>
											
											
											<div class="form-group">
												<label class="col-lg-3 control-label">Pinterest:</label>
												<div class="col-lg-9">
													<input type="text"  name="pinterest" value="<?php echo $user_detail['pinterest']; ?>" placeholder="Enter your pinterest link" class="form-control">
												</div>
											</div>
											

											<div class="text-right">
									<button type="submit"  name="update_social" class="btn btn-primary" >Update <i class="icon-arrow-right14 position-right"></i></button>
								</div>
										</fieldset>
										</form>
									</div>
								</div>

								
							</div>
						</div>
								
                              </div>
							  
							  
							  <div class="tab-pane fade in active" id="profile_img">
                                 <!-- Profile info -->
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">Change Profile Image</h6>
                                       <div class="heading-elements">
                                          <ul class="icons-list">
                                             <li><a data-action="collapse"></a></li>
                                             <li><a data-action="reload"></a></li>
                                             <li><a data-action="close"></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="panel-body">
                                      <table class='table table-bordered table-striped'>
									  <tr>
									 
									  <td>
									  <form method='POST' enctype="multipart/form-data"> 
										<div class="form-group">
                                             <div class="row">
                                                
                                                <div>
                                                   <label>Upload Profile image</label>
												   
                                                   <input type="file" required class="file-styled" name='profile_file'>
                                                   
                                                </div>
                                             </div>
                                          </div>
										<div class="text-right">
                                             <button type="submit" class="btn btn-primary" name='profile_img'>Change <i class="icon-arrow-right14 position-right"></i></button>
                                          </div>
										  </form>
									  </td>
									  
									  </tr>
									  
									  </table>
                                    </div>
                                 </div>
                                 <!-- /profile info -->
                                 
                              </div>
							  
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <!-- Navigation -->
                        <div class="panel panel-flat">
                           <div class="panel-heading">
                              <h6 class="panel-title">Navigation</h6>
                              <div class="heading-elements">
                                 <a href="#" class="heading-text">See all &rarr;</a>
                              </div>
                           </div>
                           <div class="list-group list-group-borderless no-padding-top">
                              <a href="#" class="list-group-item"><i class="icon-user"></i> My profile</a>
                              <a href="#" class="list-group-item"><i class="icon-cash3"></i> Balance</a>
                              <a href="#" class="list-group-item"><i class="icon-tree7"></i> Connections <span class="badge bg-danger pull-right">29</span></a>
                              <a href="#" class="list-group-item"><i class="icon-users"></i> Friends</a>
                              <div class="list-group-divider"></div>
                              <a href="#" class="list-group-item"><i class="icon-calendar3"></i> Events <span class="badge bg-teal-400 pull-right">48</span></a>
                              
                           </div>
                        </div>
                       
                       
                     </div>
                  </div>
                  <!-- /user profile -->
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