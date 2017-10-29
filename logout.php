<?php
ob_start();
session_start();
include("lib/config.php");
$user_id=$_SESSION['user_id'];
mysql_query("update user_registration set last_login_date=NOW(),current_login_status='Logout' where user_id='$user_id'");
unset($_SESSION['user_id']);
unset($_SESSION['SD_User_Name']);
session_destroy();
header("location:index.php");
?>