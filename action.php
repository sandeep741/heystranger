<?php

include("lib/config.php");

$value = $_POST['action'];

switch($value)
{

case "partner_reg":			
_partner_reg();
break;


case "partner_login":			
_partner_login();
break;

case "insertreg_detail":			
_insertreg_detail();
break;


}


/*User Login Code Starts here*/
function _partner_login(){
	global $mxDb;
	 @$username = mysql_real_escape_string($_POST['username']);
     @$password = mysql_real_escape_string($_POST['password']);


	 
     if($username!='' && $password!='' )
	 {
		
	$query=mysql_query("select * from partner where  username='$username' && password = '$password' ");
			 $result=mysql_fetch_array($query);
					if($num=mysql_num_rows($query))
					{ 
						$partner_id=$result['partner_id'];						
						$_SESSION['pid']=$partner_id;
						
		                echo "<script>window.location='partner-backoffice/index.php';</script>";
		                exit();
					   

					}
					else
					{
						$_SESSION['myerror']='Incorrect username or password';
		                echo "<script>window.location='login.php';</script>";
		                exit();
	       			}
	 		
	}
	else
	{
	      $_SESSION['myerror']='Please enter username and password';
		  echo "<script>window.location='login.php';</script>";
		  exit();
	}
	
}

/*Userid Generate Code Starts Here */
function partnerid()
{
$table_name='partner';
$encypt1=uniqid(rand(1000000000,9999999999), true);
$usid1=str_replace(".", "", $encypt1);
$pre_userid = substr($usid1, 0, 7);
$checkid=mysql_query("select partner_id from $table_name where partner_id='$pre_userid'");
if(mysql_num_rows($checkid)>0)
{
partnerid();
}
else
return $pre_userid;
}
/*Userid Generate Code Ends Here */



/*Ambassador Registration Code Starts Here */
function _partner_reg()
{
	global $mxDb;
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	$address=$_POST['address'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$suburb=$_POST['suburb'];
	$landline=$_POST['landline'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
    
	
	$_SESSION['firstname']=$firstname;
    $_SESSION['lastname']=$lastname;
	$_SESSION['address']=$address;
	$_SESSION['country']=$country;
	$_SESSION['state']=$state;
	$_SESSION['city']=$city;
	$_SESSION['suburb']=$suburb;
	$_SESSION['landline']=$landline;
	$_SESSION['mobile']=$mobile;
	$_SESSION['email']=$email;
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;

	
	
	$resos=mysql_query("select * from partner where  username='$username'");
    $resos1=mysql_num_rows($resos);
		  
	
		  if($resos1==1)
		  {
		  $_SESSION['myerror']='Username Already Exists';
		  echo "<script>window.location='final-reg.php';</script>";
		  exit();  
		  }
		  else
		  {
		 	  
			$partner_id=partnerid();
			$_SESSION['new_partner_id']=$partner_id;
						
			echo "<script>window.location='payment-method.php';</script>";
		    exit();			
						
			 
		  }
		 		
		  


}

function _insertreg_detail()
{

	   $regdate=date('Y-m-d');
	  
	   mysql_query("INSERT INTO `partner`(`id`, `partner_id`, `username`, `password`, `first_name`, `last_name`, `email`, `country`,`state`,`city`, `suburb`, `landline`, `mobile`, `registration_date`, `image`, `receipt`, `package`, `partner_status`, `accomodation`, `venue_conference`, `transport`, `additional`) VALUES ('','".$_SESSION['new_partner_id']."','".$_SESSION['username']."','".$_SESSION['password']."','".$_SESSION['firstname']."','".$_SESSION['lastname']."','".$_SESSION['email']."','".$_SESSION['country']."','".$_SESSION['state']."','".$_SESSION['city']."','".$_SESSION['suburb']."','".$_SESSION['landline']."','".$_SESSION['mobile']."','".$regdate."','','','".$_SESSION['pkg_session']."','1','".$_SESSION['accomodation']."','".$_SESSION['venue_conference']."','".$_SESSION['transport']."','".$_SESSION['additional']."')");
	  
	   
	   
	   $to = $_SESSION['email'];
$subject = 'Registration Confirmation';

$headers='';
$headers.= 'MIME-Version: 1.0' . "\r\n";
$headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers.= 'From: test@test.com' . "\r\n" .
    'Reply-To: test@test.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$message = '<html>

				<body>
			<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td>
			<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-left:1px solid #e1e1e1; border-right:1px solid #e1e1e1; border-top:1px solid #e1e1e1; margin-top:50px; width:560px;margin:20px;">
				<tbody>
					<tr>
						<td>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:560px;margin:20px;">
							<tbody>
								<tr>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>

						<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:560px;margin:20px;">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td style="text-align:center; vertical-align:top"><img class="CToWUd" src="http://heystranger.co.za/images/logo-white.png" style="margin:0 0 20px 0; width:180px" /></td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td style="text-align:center; vertical-align:top"><strong>Dear User</strong></td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td style="text-align:center; vertical-align:top">
									<p style="text-align:center"></p>
									</td>
									<td>&nbsp;</td>
								</tr>
							
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>



			<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-left:1px solid #e1e1e1; border-right:1px solid #e1e1e1; width:560px;margin:20px;">
				<tbody>
					<tr>
						<td>
						<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:560px;margin:20px;">
							<tbody>
								<tr>
				  <td>Your login Details are:-</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>Username : '.$_SESSION["username"].' </td>
				  <td>&nbsp;</td>
				</tr>
				
				<tr>
				  <td>Password  : '.$_SESSION["password"].' </td>
				  <td>&nbsp;</td>
				</tr>
				
			
				
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>

			

				</body>

				</html>';

	
mail($to, $subject, $message, $headers);
									  
	  
       $_SESSION['mymsg']='You are successfully registered.Please check your email for login details.Please note below bank detail and make payment and upload your proof of payment in partner backoffice to access full backoffice.';	  
	   echo "<script>window.location='bank-method.php';</script>";
	   exit();  
}

?>