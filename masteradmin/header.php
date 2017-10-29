<?php
include("../lib/config.php");
// manage secure login of user account
if(!isset($_SESSION['token_id']))
{
 echo "<script>window.location='login.php';</script>";
 exit();
}
else if(isset($_SESSION['token_id'])){
  if($_SESSION['token_id'] != md5($_SESSION['admin_id'])){
    echo "<script>window.location='login.php';</script>";
 exit();
  }
  
  else{
  
    $condition = " where user_id ='".$_SESSION['admin_id']."'";
    $args_user = $mxDb->get_information('admin', '*', $condition,true, 'assoc');
  }
}
// store random no for security
$_SESSION['rand'] = mt_rand(1111111,9999999); 
?>
<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Global MLM "Let's Grow Together"</title>