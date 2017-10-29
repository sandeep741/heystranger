<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('header.php'); 
	
if(isset($_GET['eid']))
{
$eid=$_GET['eid'];
$user_detail=mysql_fetch_assoc(mysql_query("select * from user_registration where user_id='$eid' "));
}

if(isset($_REQUEST['update_bank']))
{
  $account_name=$_POST['account_name'];
  $account_no=$_POST['account_no'];
  $branch_name=$_POST['branch_name'];
  $bank_name=$_POST['bank_name'];
  $swift_code=$_POST['swift_code'];

mysql_query("update user_registration set acc_name='$account_name', bank_nm='$bank_name', branch_nm='$branch_name', ac_no='$account_no', swift_code='$swift_code' where user_id='$eid'");

$_SESSION['mymsg']='Bank Detail Updated Successfully !';
	  echo "<script>window.location='edit-profile.php?eid=".$eid."';</script>";
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
  $tpassword=$_POST['tpassword'];
  $dob=$_POST['dob'];
  $sex=$_POST['sex'];
  $zipcode=$_POST['zipcode'];

  mysql_query("update user_registration set first_name='$first_name', last_name='$last_name', email='$email', password='$password', t_code='$tpassword', address='$address', country='$country', state='$state', city='$city', zipcode='$zipcode', telephone='$contact', dob='$dob', sex='$sex'  where user_id='$eid'");
 
$_SESSION['mymsg']='Personal Detail Updated Successfully !';
	  echo "<script>window.location='edit-profile.php?eid=".$eid."';</script>";
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

	<script type="text/javascript" src="js/app.js"></script>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Edit Profile</span></h4>
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
							<li><a href="">Profile</a></li>
							<li class="active">Edit Profile</li>
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

					<!-- Horizontal form options -->
					<div class="row">
						<div class="col-md-12">

							<!-- Basic layout-->
							<form action="#" class="form-horizontal">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Sponsor detail</h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">
									  <div class="form-group">
											<label class="col-lg-3 control-label">User Id:</label>
											<div class="col-lg-9">
								<input type="text" class="form-control" readonly value="<?php echo $user_detail['ref_id']; ?>">
											</div>
										</div>
										<?php
										$sponsor_detail=mysql_fetch_assoc(mysql_query("SELECT username, CONCAT('',first_name,last_name) AS fullname FROM user_registration where user_id='$user_detail[ref_id]'"));
										?>
										<div class="form-group">
											<label class="col-lg-3 control-label">Username</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" readonly value="<?php echo $sponsor_detail['username']; ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Name</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" value="<?php echo $sponsor_detail['fullname']; ?>" readonly>
											</div>
										</div>

									</div>
								</div>
							</form>
							<!-- /basic layout -->

						</div>

						
					</div>
					<!-- /vertical form options -->


					<!-- 2 columns form -->
					
						<div class="panel panel-flat">
							<div class="panel-heading">
							<?php if($_SESSION['mymsg']!=''){ ?><h5 style='color:green;font-weight:bold'><?php echo $_SESSION['mymsg']; unset($_SESSION['mymsg']); ?> </h5><?php } ?>
						<?php if($_SESSION['myerror']!=''){ ?><h5 style='color:red;font-weight:bold'><?php echo $_SESSION['myerror']; unset($_SESSION['myerror']); ?> </h5><?php } ?>
							
								<h5 class="panel-title">Member Detail</h5>
								
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                		<li><a data-action="close"></a></li>
				                	</ul>
			                	</div>
							</div>

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
												<label class="col-lg-3 control-label">Transaction Password</label>
												<div class="col-lg-9">
													<input type="password" class="form-control" name='tpassword' value="<?php echo $user_detail['t_code']; ?>">
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
												<label class="col-lg-3 control-label">IFSC/Swift Code:</label>
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
								</div>

								
							</div>
						</div>
						
						
					
					<!-- /2 columns form -->


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
