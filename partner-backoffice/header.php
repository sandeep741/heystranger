<?php
include("../lib/config.php");

if(isset($_SESSION['pid']) && $_SESSION['pid'] != "")
{
	$idd = $_SESSION['pid'];
	$p=mysql_fetch_array(mysql_query("select * from partner where partner_id='$idd' "));
	
	$pid=$p['partner_id'];
	
}
else
{
	echo "<script language='javascript'>window.location.href='../logout.php';</script>";exit;
}
?>
<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Hey Stranger</title>