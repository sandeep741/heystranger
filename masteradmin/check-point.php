<?php
// define path constant for include file
define('ABSPATH','../lib/');


// include main file
include(ABSPATH.'functions.php'); 
// check point for login user and logout user
if( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['action']) && isset($_POST['token']) ){
	
	if( !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['action']) && !empty($_POST['token']) ){
		// check token no and hit url
		if( $_POST['token'] == $_SESSION['rand_no'] && $_SESSION['page_url'] == $_SERVER['HTTP_REFERER'] ){
			
			// check user credential
			$username = mysql_real_escape_string($_POST['username']);
			$password = mysql_real_escape_string($_POST['password']);
			
$password1= hash("sha256",$password);
//echo $username; print_r("<br/>");echo $password;print_r("<br/>");echo $password1;exit();
			$condition = " where username ='".$username."' and password ='".$password1."'";
			$args_user = $mxDb->get_information('admin', '*', $condition,true, 'assoc');
			
			if($args_user['username']){
				
				// check password
				if( $password1 == $args_user['password']){
				
					
					unset($_SESSION['salt']);
					unset($_SESSION['rand_no']);
					
					// check admin account status
					if( $args_user['stutus'] == 0 ){
						
						// update login of user
						$condition = " username ='".$username."'";
						$update_array = array('last_login'=>date('Y-m-d H:i:s'),'login_status'=>1);
						if($mxDb->update_record('admin', $update_array, $condition)){
								
							$_SESSION['token_id'] = md5($args_user['user_id']);
							$_SESSION['admin_id'] = $args_user['user_id'];
							
							echo "<script>window.location='index.php';</script>";
							exit();  							
							
						
						}
						else
						{
		     			  $_SESSION['myerror']='Login Failed. Please try again';
     					  echo "<script>window.location='login.php';</script>";
	     				  exit();
							
						}
					}
					else
					{
					$_SESSION['myerror']='Your account is suspent contact to Super admin';
     					  echo "<script>window.location='login.php';</script>";
	     				  exit();
						
					}
				}
				else
				{
				$_SESSION['myerror']='Your password is incorrect';
     					  echo "<script>window.location='login.php';</script>";
	     				  exit();
					
				}
				
			}
			else
			{
			$_SESSION['myerror']='Please enter correct username or password';
     					  echo "<script>window.location='login.php';</script>";
	     				  exit();
					
			}
		}
		else
		{
		$_SESSION['myerror']='Please enter correct username and password';
     					  echo "<script>window.location='login.php';</script>";
	     				  exit();
		}
	}
	else
		header("Location:".$_SERVER['HTTP_REFERER']);
}


// logout user 
if(isset($_REQUEST['logout'])){
	
	$condition = " user_id ='".$_SESSION['admin_id']."'";
	$update_array = array('last_logout'=>date('Y-m-d H:i:s'),'login_status'=>0);
	if($mxDb->update_record('admin', $update_array, $condition)){
		
		// destroy login session
		unset($_SESSION['token_id']);
		unset($_SESSION['admin_id']);
		
		$_SESSION['mymsg']='Logout successfully!';
	  echo "<script>window.location='login.php';</script>";
	  exit();
		
	}
	else{
		header("Location:".$_SERVER['HTTP_REFERER']);
	}
}
?>